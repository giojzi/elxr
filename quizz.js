
const mixedQuestion = {

  props:["value", "question"],
  template:`<div>
    <radio-question :question="question" v-model="units"></radio-question>
    <numeric-input-question :question="question" v-model="internalValue"></numeric-input-question>
  </div>`
  ,
  data(){
      return {
          internalValue: this.value,
            units: null
        }
    },
    computed:{
      complex(){
          return {
              units: this.units,
                value: this.internalValue
            }
        }
    },
  watch:{
      complex(newValue){
          this.$emit('input', newValue)
        } 
    }
    
  
}

const RadioQuestion = {
  props:["value", "question"],
  template:`
      <div>
            <template v-for="label in question.labels">
                <input type="radio" :id="label" :value="label" v-model="picked">
                <label :for="label">{{label}}</label>
                 
            </template>
        </div>
    `,
    data(){
      return {
          picked: this.value
        }
    },
    watch:{
      picked(){
          this.$emit("input", this.picked)
        }
    }
}
Vue.component("RadioQuestion", RadioQuestion)

const NumericInputQuestion = {
  props:["value", "question"],
  template:`
      <div>
      <input type="number" min="0" v-model="internalValue" @input="onInput" :value="value" />
        </div>
    `,
    data(){
      return {
          internalValue: this.value
        }
    },
    methods:{
      onInput(){this.$emit("input", this.internalValue)}
    }

}
Vue.component("NumericInputQuestion", NumericInputQuestion)

new Vue({
  el: '#quizz',
  data: {
    questions:[
      {question: 'Let\'s start by the basics', type: RadioQuestion, labels:["Male", "Female", "Other"], answer: null},
        {question:'How old are you?', type: NumericInputQuestion, answer: null},
        {question:'What\'s your weight?', type: mixedQuestion, labels:["KG", "LB"], answer: null},
        {question:'How tall are you?', type: mixedQuestion, labels:["Metric", "US"], answer: null},
        {question:'How many days per week do you do aerobic exercise?', type: NumericInputQuestion, answer: null},
        {question:'How would you self-assess your health??', type: RadioQuestion, labels:["Poor", "Fair", "Excellent"], answer: null},
        {question:'Do you have diabetes?', type: RadioQuestion, labels:["Yes", "No"], answer: null},
        {question:'How many alcoholic beverages do you drink per week?', type: NumericInputQuestion, answer: null},
        {question:'How many alcoholic beverages do you drink per week?', type: NumericInputQuestion, answer: null},
        {question:'How many servings of saturated (animal) fats do you eat each day (not including low-fat dairy, white and skinless turkey, white and skinless chicken, or fish)?', type: NumericInputQuestion, answer: null},
        {question:'Are you a smoker?', type: RadioQuestion, labels:["Never Smoked", "Quit", "Yes"], answer: null},
        {question:'How many cigarettes per day?', type: RadioQuestion, labels:["1/2 pack a day", "1 pack a day", "2 packs a day"], answer: null},
        {question:'How many hours do you sleep each night?', type: NumericInputQuestion, answer: null},
        {question:'How would you describe your stress level on average?', type: RadioQuestion, labels:["No Stress", "Low stress", "Stressful", "Very stressful"], answer: null}
    ],
    index:0
  },
  computed:{
    currentQuestion(){
      return this.questions[this.index]
    }
  },
  methods:{
    next(){
      if(this.index + 1 == this.questions.length)
        this.index = 0;
      else
        this.index++;
        
    },
    previous(){
      
      if(this.index - 1 < 0)
        this.index = this.questions.length - 1;
      else
        this.index--;
    }
    
  }
})