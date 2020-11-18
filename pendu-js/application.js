const elements = {
  word: document.querySelector(".word"),
  count: "5",
};
const words = {
  word: "PERLINPIMPIM".split(""),
  badsAnswers: [],
  goodsAnswers: [],
  cases: [],
};

const checkLetter = (keyPressed) => {
  return words.word.includes(keyPressed);
};

const updateLetter = (letter) => {
  for (const key in words.word) {
    // verifier chaque lettre une à une
    if (letter == words.word[key]) {
      words.cases[key] = words.word[key];
    }
  }
};

const saveWrongdAnswer = (letter) => {
  if (!words.badsAnswers.includes(letter)) {
    words.badsAnswers.push(letter);
  }
};
const saveRightAnswer = (letter) => {
  if (!words.badsAnswers.includes(letter)) {
    words.goodsAnswers.push(letter);
  }
};

const checkWin = () => {
  return words.cases.toString() == words.word.toString();
};
const runGame = (e) => {
  if (checkLetter(e.key)) {
    saveWrongdAnswer();
    updateLetter(e.key);
    renderLetter(e.key);
  } else {
    saveWrongdAnswer();
    elements.count -= 1;
  }
};
const setCases = (word) => {
  for (let i = 0; i < word.length; i++) {
    words.cases.push("_");
  }
};
const renderCases = (word) => {
  for (const key in words.cases) {
    elements.word.innerHTML += words.cases[key];
  }
};
const renderLetter = () => {
  elements.word.innerHTML = "";
  for (const key in words.cases) {
    elements.word.innerHTML += words.cases[key];
  }
};

setCases(words.word);
renderCases();

window.addEventListener("keypress", (e) => {
  if (elements.count >= 0) {
    runGame(e);
  } else {
    alert("You lose !");
  }
  if (checkWin()) {
    console.log("win!");
    document.querySelector(".winner").style.display = "flex";
  }
});
