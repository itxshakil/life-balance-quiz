<template>
  <div class="max-w-2xl mx-auto p-6 bg-gray-100 dark:bg-gray-800 shadow-lg rounded-lg">
    <header class="mb-6 text-center">
      <h1 class="text-3xl font-bold text-blue-700 dark:text-blue-400">🌟 Life Balance Quiz</h1>
      <p class="text-gray-600 dark:text-gray-300 mt-2">Take a moment to assess your life balance across key areas.</p>
    </header>

    <main>
      <template v-if="!showResults">
        <div class="flex justify-center mb-6">
          <svg class="w-24 h-24" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
            <circle class="fill-none stroke-gray-200 dark:stroke-gray-900 stroke-[4px]" cx="18" cy="18" r="16"></circle>
            <circle
              class="progress fill-none stroke-blue-600 dark:stroke-blue-400 stroke-[4px] duration-200 ease-in-out -rotate-90"
              cx="18"
              cy="18"
              r="16"
              :stroke-dasharray="`${progress} 100`"
            ></circle>
            <text x="18" y="20.5" class="progress-text text-xs font-bold fill-gray-900 dark:fill-gray-200">{{ Math.round(progress) }}%</text>
          </svg>
        </div>
        <h2 class="text-xl font-semibold text-center text-gray-800 dark:text-gray-200">{{ shuffledQuestions[currentQuestion]?.question }}</h2>
        <div class="mt-6 flex flex-wrap items-center gap-4">
          <label
            v-for="option in options"
            :key="option.value"
            :for="option.value"
            class="cursor-pointer flex flex-1 items-center justify-center px-3 py-1 dark:text-white border rounded-lg shadow-sm hover:bg-blue-100 dark:hover:bg-blue-700 transition-all duration-200"
            :class="selectedAnswer == option.value ? 'bg-blue-200 dark:bg-blue-600' : 'bg-gray-100 dark:bg-gray-900'"
          >
            <input
              type="radio"
              :id="option.value"
              v-model="selectedAnswer"
              :value="option.value"
              class="hidden"
            />
            <span class="text-lg whitespace-nowrap">{{ option.label }}</span>
          </label>
        </div>
        <div class="flex justify-center mt-6">
          <button
            @click="handleAnswer(selectedAnswer)"
            :disabled="!selectedAnswer"
            class="px-3 py-1 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 dark:hover:bg-blue-500 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-blue-600 disabled:hover:text-white disabled:hover:border-blue-600 disabled:hover:shadow-none disabled:hover:ring-0 flex items-center justify-center gap-2"
          >
            Next
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </template>

      <template v-else>
        <h2 class="text-2xl font-semibold text-center text-green-700 dark:text-green-400">Your Life Balance Results</h2>
        <PolarResultChart :scores="categoryScores" />
        <div class="grid grid-cols-1 gap-4 mt-6">
          <div
            v-for="(score, category) in categoryScores"
            :key="category"
            class="p-4 border rounded-lg shadow-md bg-gray-50 dark:bg-gray-900 dark:text-gray-200"
          >
            <h3 class="text-xl font-semibold capitalize">{{ category }}</h3>
            <p class="text-lg mt-2">
              Score: {{ score }}%
            </p>
            <template v-if="score >= 80">
              <p class="text-green-600 dark:text-green-400 font-semibold mt-2">
                🎉 You're thriving in {{ category }}!
              </p>
            </template>
            <template v-else>
              <p class="text-red-600 dark:text-red-400 font-semibold mt-2">
                Consider focusing more on {{ category }}.
              </p>
              <ul class="mt-2 list-disc list-inside text-sm text-gray-600 dark:text-gray-400">
                <li
                  v-for="suggestion in suggestions[category]"
                  :key="suggestion"
                >
                  {{ suggestion }}
                </li>
              </ul>
            </template>
          </div>
        </div>
        <div class="text-center mt-6">
          <p>Enjoying this? Share with friends to compare your results!</p>
          <button @click="shareResults">Share</button>
        </div>
      </template>
    </main>

    <footer class="mt-6 text-center text-gray-500 dark:text-gray-400 text-sm">
      <template v-if="!showResults">
        Question {{ currentQuestion + 1 }} of {{ shuffledQuestions.length }}
      </template>
      <template v-else>
        Thank you for taking the quiz!
      </template>
    </footer>
  </div>
</template>

<script lang="ts">
import { ref, computed } from "vue";
import PolarResultChart from '@/Components/PolarResultChart.vue';

 // Assume this is where your data is stored
 export const questions = [
  { id: "joy_level", question: "How often do you feel genuine joy or happiness in your daily life?", category: "joy" },
  { id: "gratitude_practice", question: "How regularly do you practice gratitude?", category: "joy" },
  { id: "financial_security", question: "How secure do you feel about your financial future?", category: "money" },
  { id: "budgeting_habits", question: "How often do you stick to a monthly budget?", category: "money" },
  { id: "debt_management", question: "How comfortable are you with your current debt situation?", category: "money" },
  { id: "mental_clarity", question: "How often do you feel clear-headed and focused?", category: "mind" },
  { id: "mindfulness_practice", question: "How often do you practice mindfulness or meditation?", category: "mind" },
  { id: "learning_new_skills", question: "How often do you seek out new skills or knowledge?", category: "mind" },
  { id: "self_development", question: "How often do you work on developing new skills or knowledge?", category: "personal_growth" },
  { id: "goal_setting", question: "How clear and defined are your personal growth goals?", category: "personal_growth" },
  { id: "physical_fitness", question: "How would you rate your physical fitness and strength?", category: "body" },
  { id: "body_care", question: "How well do you take care of your physical appearance and body needs?", category: "body" },
  { id: "close_friendships", question: "How satisfied are you with the quality of your friendships?", category: "friendships" },
  { id: "social_engagement", question: "How often do you spend time with friends or social groups?", category: "friendships" },
  { id: "family_time", question: "How often do you spend quality time with family?", category: "family" },
  { id: "family_support", question: "How well do you support and feel supported by family members?", category: "family" },
  { id: "relationship_satisfaction", question: "How fulfilling is your romantic relationship (if applicable)?", category: "romance" },
  { id: "relationship_communication", question: "How open and effective is communication in your romantic relationship?", category: "romance" },
  { id: "spiritual_peace", question: "How at peace do you feel with your life spiritually?", category: "soul" },
  { id: "community_connection", question: "How connected do you feel to a community or cause?", category: "soul" },
  { id: "life_meaning", question: "How often do you reflect on what gives your life meaning?", category: "soul" },
  { id: "career_purpose", question: "How aligned do you feel with your career or mission in life?", category: "mission/career" },
  { id: "work_growth", question: "How satisfied are you with your opportunities for growth in your current work?", category: "mission/career" },
  { id: "job_security", question: "How secure do you feel in your current job?", category: "mission/career" },
  { id: "career_contribution", question: "How much do you feel your work contributes positively to others?", category: "mission/career" },
];

export const options = [
  { value: "1", label: "Not at all" },
  { value: "2", label: "Slightly" },
  { value: "3", label: "Moderately" },
  { value: "4", label: "Very" },
  { value: "5", label: "Extremely" },
];
type Category = 'joy' | 'money' | 'mind' | 'personal_growth' | 'body' | 'friendships' | 'family' | 'romance' | 'soul' | 'mission/career';

export const categories: Record<string, string[]> = {
  joy: ["joy_level", "gratitude_practice"],
  money: ["financial_security", "budgeting_habits", "debt_management"],
  mind: ["mental_clarity", "mindfulness_practice", "learning_new_skills"],
  personal_growth: ["self_development", "goal_setting"],
  body: ["physical_fitness", "body_care"],
  friendships: ["close_friendships", "social_engagement"],
  family: ["family_time", "family_support"],
  romance: ["relationship_satisfaction", "relationship_communication"],
  soul: ["spiritual_peace", "community_connection", "life_meaning"],
  "mission/career": ["career_purpose", "work_growth", "job_security", "career_contribution"],
};

export const suggestions: Record<string, string[]> = {
  joy: ["Practice gratitude daily", "Engage in hobbies you enjoy", "Take time to relax and unwind"],
  money: ["Set up a budget", "Review your financial goals regularly", "Work on paying down debt"],
  mind: ["Practice mindfulness or meditation", "Engage in mentally stimulating activities", "Focus on learning new skills"],
  personal_growth: ["Set clear personal goals", "Find a mentor or guide", "Allocate time for self-improvement"],
  body: ["Exercise regularly", "Maintain a balanced diet", "Ensure proper rest and self-care"],
  friendships: ["Make plans to see friends", "Join a social group", "Engage in open and supportive conversations"],
  family: ["Plan regular family activities", "Make time for open discussions", "Show support to family members"],
  romance: ["Communicate openly", "Plan regular date nights", "Express appreciation for your partner"],
  soul: ["Reflect on your values", "Connect with a community", "Engage in a meaningful cause"],
  "mission/career": ["Set career goals", "Seek growth opportunities", "Network with like-minded individuals"],
};

export const colors = ["#ffadad", "#ffd6a5", "#fdffb6", "#caffbf", "#9bf6ff", "#a0c4ff", "#bdb2ff", "#ffc6ff"];

export default {
  name: "LifeBalanceQuiz",
  components: {
    PolarResultChart
  },
  setup() {
    const currentQuestion = ref(0);
    const selectedAnswer = ref("");
    const showResults = ref(false);
    const answers = ref<Record<string, number>>({});
    const shuffledQuestions = ref([...questions].sort(() => Math.random() - 0.5));

    const handleAnswer = async (answer: string) => {
      if (!answer) return;
      const currentQ = shuffledQuestions.value[currentQuestion.value];
      answers.value[currentQ.id] = parseInt(answer, 10);

      if (currentQuestion.value < shuffledQuestions.value.length - 1) {
        currentQuestion.value++;
        selectedAnswer.value = "";
      } else {
        showResults.value = true;
        submitResults();
      }
    };

    const categoryScores = computed(() => {
      const scores: Record<string, number> = {};
  Object.keys(categories).forEach((category) => {
    const categoryQuestions = categories[category];
    const total = categoryQuestions.reduce(
      (sum:number, questionId:string) => sum + (answers.value[questionId] || 0),
      0
    );
    let score = total / categoryQuestions.length;
    scores[category] = parseFloat((score / 5 * 100).toFixed(2));
  });

  return Object.fromEntries(
    Object.entries(scores).sort(([, a], [, b]) => parseFloat(b.toString()) - parseFloat(a.toString()))
  );
    });

    const progress = computed(() => {
      return ((currentQuestion.value + 1) / shuffledQuestions.value.length) * 100;
    });

    const shareResults = () => {
      if (navigator.share) {
        navigator.share({
          title: 'Life Balance Quiz',
          text: 'Check out my results from the Life Balance Quiz!',
          url: window.location.href,
        })
        .then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing', error));
      } else {
        alert('Web Share API is not supported in your browser.');
      }
    }

    // ... other methods
    const submitResults =  async () => {
      try {
        console.log('Submitting quiz results...');
        const cleanResponses = shuffledQuestions.value.map(question => ({
          question: question.question,
          answer: answers.value[question.id]
        }));

        const cleanResults = Object.entries(categoryScores.value).map(([category, score]) => ({
          category,
          score
        }));

        const response = await fetch('/api/submit-quiz', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({
            responses: cleanResponses,
            results: cleanResults
          })
        });

        if (!response.ok) {
          throw new Error('Network response was not ok');
        }

        const data = await response.json();
        console.log('Quiz submitted successfully:', data);
      } catch (error) {
        console.error('There was a problem with the submission:', error);
      }
    }

    return {
      shuffledQuestions,
      options,
      currentQuestion,
      selectedAnswer,
      showResults,
      answers,
      handleAnswer,
      categoryScores,
      suggestions,
      submitResults,
      progress,
      colors,
      shareResults
    };
  },
};
</script>

<style scoped>

.progress {
  stroke-linecap: round;
  transform-origin: center;
  transition: stroke-dasharray 0.5s;
}

.progress-text {
  text-anchor: middle;
}

</style>
