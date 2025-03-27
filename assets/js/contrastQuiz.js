import { answers } from "./quiz.js";

console.log(answers);
class Question1 {
  constructor() {
    this.correct = answers[0];
  }
  get getCorrect() {
    return this.correct;
  }
}

class Question2 {
  constructor() {
    this.correct = answers[1];
  }
  get getCorrect() {
    return this.correct;
  }
}

class Question3 {
  constructor() {
    this.correct = answers[2];
  }
  get getCorrect() {
    return this.correct;
  }
}

export { Question1, Question2, Question3 };