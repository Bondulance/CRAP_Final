import { inputs } from "./quiz";

console.log(inputs);
class Question1 {
  constructor(correct) {
    this.correct = inputs[0];
  }
  get getCorrect() {
    return this.correct;
  }
}

class Question2 {
  constructor(correct) {
    this.correct = inputs[1];
  }
  get getCorrect() {
    return this.correct;
  }
}

class Question3 {
  constructor(correct) {
    this.correct = inputs[2];
  }
  get getCorrect() {
    return this.correct;
  }
}
