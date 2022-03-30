const quiz = [
  {
    question: 'チョコレート発祥の国はどこでしょうか？',
    answers: [
      'スイス',
      'メキシコ',
      'ベルギー',
      '日本',
    ],
    correct: 'メキシコ'
  },
  {
    question: 'ゴリラの血液型は1種類しかないのですが何型でしょうか？',
    answers: [
      'O型',
      'AB型',
      'B型',
      'A型',
    ],
    correct: 'B型'
  },
  {
    question: '宇宙で太陽を観ると何色になっているでしょうか？',
    answers: [
      '赤色',
      '黒色',
      '白色',
      '無色透明',
    ],
    correct: '白色'
  },
];

const quizLength = quiz.length;
let quizIndex = 0;
let score = 0;


const $button = document.getElementsByTagName('button');
const buttonLength = $button.length;

// クイズの問題文、選択肢を定義
const setupQuiz = () => {
  // 定数の文字列をHTMLに反映させる
  document.getElementById('js-question').textContent = quiz[quizIndex].question;
  let buttonIndex = 0;
  while(buttonIndex < buttonLength) {
    $button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
    buttonIndex++;
  }
}
setupQuiz();

const clickHandler = (e) => {
  if(quiz[quizIndex].correct === e.target.textContent) {
    window.alert('正解！');
    score++;
  }else {
    window.alert('不正解...');
  }
  quizIndex++;
  if(quizIndex < quizLength) {
    setupQuiz();
  }else {
    window.alert('終了！ あなたの正解数は' + score + '/' + quizLength + 'です');
  }

};
// ボタンをクリックしたら正誤判定
let handleIndex = 0;
while(handleIndex < buttonLength) {
  $button[handleIndex].addEventListener('click', (e) => {
    clickHandler(e);
  });
  handleIndex++;
}