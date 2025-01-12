const DEBUG = true;

const APP_CACHE = 'v-0.2.0';
const DYNAMIC_CACHE = 'dynamic-cache-v-0.2.0';
const STATIC_ASSETS = [
    '/app.webmanifest',
    '/assets/screenshots/LIFE_QUIZ_HOME_PAGE.png',
    '/assets/screenshots/LIFE_QUIZ_QUIZ.png',
    '/assets/screenshots/LIFE_QUIZ_RESULT.png',
    '/assets/screenshots/LIFE_QUIZ_QUESTION_WIDE.png',
];

const basicPathsToCache = [
    '/',
    '/?utm_source=homescreen',
    '/build/manifest.json',
    '/build/assets/Welcome-XFI97WCG.css',
    '/build/assets/app-Cr8ZZhjq.css',
    '/build/assets/_plugin-vue_export-helper-DlAUqK2U.js',
    '/build/assets/DeleteUserForm-DZu6-EHt.js',
    '/build/assets/UpdatePasswordForm-CVXE_aC5.js',
    '/build/assets/UpdateProfileInformationForm-D3PNInuc.js',
    '/build/assets/GuestLayout.vue_vue_type_script_setup_true_lang-kn4xx698.js',
    '/build/assets/PrimaryButton-JqnZB9-O.js',
    '/build/assets/PostCard.vue_vue_type_script_setup_true_lang-DFYmCLDC.js',
    '/build/assets/Dashboard-DyoFrOzW.js',
    '/build/assets/BlogLayout.vue_vue_type_script_setup_true_lang-Dw5gLner.js',
    '/build/assets/TextInput.vue_vue_type_script_setup_true_lang-5bqlos1o.js',
    '/build/assets/ConfirmPassword-BlHAVz87.js',
    '/build/assets/Edit--tUuSgQA.js',
    '/build/assets/ForgotPassword-COWoYLtr.js',
    '/build/assets/VerifyEmail-NdtwQ6rZ.js',
    '/build/assets/Footer.vue_vue_type_script_setup_true_lang-CzyCk6C1.js',
    '/build/assets/ResetPassword-G9fXpeDR.js',
    '/build/assets/UpdatePasswordForm.vue_vue_type_script_setup_true_lang-BZ3ajXlh.js',
    '/build/assets/Register-DDuaw8ye.js',
    '/build/assets/UpdateProfileInformationForm.vue_vue_type_script_setup_true_lang-BhNIqSlT.js',
    '/build/assets/Login-cKdKSP2U.js',
    '/build/assets/ApplicationLogo-CQidYRrL.js',
    '/build/assets/DeleteUserForm.vue_vue_type_script_setup_true_lang-ChHKRdKh.js',
    '/build/assets/PrivacyPolicy-DRYEbsWc.js',
    '/build/assets/AuthenticatedLayout.vue_vue_type_script_setup_true_lang-CFlL6IOe.js',
    '/build/assets/Index-BCq2OVDA.js',
    '/build/assets/BuildGrowthMindset-IqPL7Pla.js',
    '/build/assets/AchievingSpiritualWellBeing-BSApcwkC.js',
    '/build/assets/CreateLastingHappiness-DgQ6he5U.js',
    '/build/assets/BuildStrongRelationships-CffckKtv.js',
    '/build/assets/MindBodyConnection-BysZon8U.js',
    '/build/assets/MorningRoutineGuide-DO1_ERGZ.js',
    '/build/assets/BuildConfidence-DMZvWeAc.js',
    '/build/assets/WorkLifeBalance-CH1wH9Hg.js',
    '/build/assets/FindLifePurpose-nd1Rqr9v.js',
    '/build/assets/FinancialFreedomTips-CKsGDO3W.js',
    '/build/assets/MentalHealthTips-0_r9x28B.js',
    '/build/assets/ManageStress-DI-cLnWF.js',
    '/build/assets/StayFitHealthy-BGguMoXu.js',
    '/build/assets/PersonalGrowthHack-C199E0tQ.js',
    '/build/assets/CareerBoostStrategies-DMQk3H2F.js',
    '/build/assets/Welcome-BSeIVQtd.js',
    '/build/assets/app-wpJW6bKR.js',
];

function log(message, ...optionalParams) {
    if (DEBUG) {
        console.log(
            `%c Service Worker %c ${message}`,
            'background: #333; color: #fff; border-radius: 0.1em; padding: 0 0.3em; margin-right: 0.5em;',
            'background: #3498db; color: #fff; border-radius: 0.1em; padding: 0 0.3em;',
            ...optionalParams
        );
    }
}

function logError(message, ...optionalParams) {
    if (DEBUG) {
        console.error(
            `%c Service Worker %c ${message}`,
            'background: #f00; color: #fff; border-radius: 0.1em; padding: 0 0.3em; margin-right: 0.5em;',
            'background: #3498db; color: #fff; border-radius: 0.1em; padding: 0 0.3em;',
            ...optionalParams
        );
    }
}

// Function to fetch and cache a request
const cacheRequest = async (cacheName, request, maxEntries, maxAge) => {
    if (!('caches' in self) || request.method !== 'GET') {
        return fetch(request);
    }

    try {
        const cache = await caches.open(cacheName);
        const cachedResponse = await cache.match(request);

        if (cachedResponse && maxAge) {
            const cachedTime = new Date(cachedResponse.headers.get('date')).getTime();
            const now = Date.now();
            const isCacheOld = (now - cachedTime) > maxAge * 1000;
            if (isCacheOld) {
                await cache.delete(request);
            } else {
                return cachedResponse;
            }
        }

        const response = await fetch(request);
        if (response.ok && request.method === 'GET') {
            const clonedResponse = response.clone();
            log('Caching New Resource', request.url);
            await cache.put(request, clonedResponse);

            const updatedCachedResponses = await cache.keys();
            if (maxEntries && updatedCachedResponses.length >= maxEntries) {
                await cache.delete(updatedCachedResponses[0]); // Remove the oldest entry
            }
        }

        return response;
    } catch (error) {
        logError('Error fetching and caching new data', error);
        throw error;
    }
};

self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(APP_CACHE)
            .then(cache => cache.addAll(basicPathsToCache))
            .then(() => self.skipWaiting())
            .catch(error => {
                logError('Error during installation', error);
                throw error;
            })
    );
});

self.addEventListener('activate', async (e) => {
    log('Activated');
    try {
        const keyList = await caches.keys();
        const promises = keyList.map((key) => {
            if (key !== APP_CACHE) {
                log('Removing Old Cache', key);
                return caches.delete(key);
            }
        });
        await Promise.all(promises);
    } catch (error) {
        logError('Error removing old cache', error);
    }

    try {
        await self.clients.claim();
        log('Claimed clients');
    } catch (error) {
        logError('Error claiming clients', error);
    }
});
self.addEventListener('fetch', async event => {
    const request = event.request;

    if (STATIC_ASSETS.includes(request.url)) {
        event.respondWith(cacheRequest(APP_CACHE, request));
    } else if (request.url.startsWith(self.location.origin)) {
        event.respondWith(cacheRequest(DYNAMIC_CACHE, request, 15, 2 * 24 * 60 * 60));
    } else {
        event.respondWith(fetch(event.request));
    }
});

self.addEventListener('message', event => {
    log('Message Received', event.data);
    if (event.data && event.data.type === 'SKIP_WAITING') {
        self.skipWaiting().then(r => log('Skip waiting')).catch(
            error => logError('Error skipping waiting', error));
    }
});
