const elements = {
  word: document.querySelector(".word"),
};
const words = {
  word: "perlinpainpain".split(""),
  badsAnswers: [],
  goodsAnswers: [],
  cases: [],
};

// // Creer un mot
// Créer une variable Erreur = 10
// On doit pouvoir parcourir chaque lettre du mot => Transformer en array
// Récupérer la lettre que l'utilisateur rentre

// Boucle ici
// Vérifier que la lettre est présente dans le mot
// Si la lettre match => La rentrer
// Si non la rajouter dans une liste des lettres déjà joué
// Enlever -1 au joueur

// Get input from user

const setCases = (word) => {
  for (let i = 0; i < word.length; i++) {
    words.cases.push("_");
  }
};

window.addEventListener("keypress", (e) => {
  console.log(e.key);
  // check letter in word

  if (checkLetter(e.key)) {
    saveWrongdAnswer();
    renderLetter(e.key);
  } else {
    saveWrongdAnswer();
  }
});

setCases(words.word);

const renderCases = (word) => {
  for (const key in words.cases) {
    elements.word.innerHTML += words.cases[key];
  }
};

const checkLetter = (keyPressed) => {
  return words.word.includes(keyPressed);
};

// Render Letter
const renderLetter = (letter) => {
  for (const key in words.word) {
    // verifier chaque lettre une à une
    if (letter == words.word[key]) {
      celements.words;
    }
  }
};

const saveWrongdAnswer = (letter) => {
  if (!words.badsAnswers.includes(letter)) {
    words.badsAnswers.push(letter);
  }
};

renderCases(words.word);
