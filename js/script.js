/*
スマホメニュー表示
=======================================================*/

/**/
const btn = document.querySelector('.btn-menu'); /*『btn-menu』クラスのついたボタンを『btn』という箱に入れる*/
const nav = document.querySelector('.main-nav');/*『mainーnav』クラスのついたメニュー部分を『nav』という箱に入れる*/
btn.addEventListener('click', () => {/*ボタンをクリックすると*/
  nav.classList.toggle('open-menu');/*メニュー部分に『open-menu』というクラスをつけたり外したりする*/
  /*メニューボタンのテキストを変更する*/
  if (btn.innerHTML === 'Menu') {/*もしボタンに『Menu』と書いてあったら*/
    btn.innerHTML = 'Close';/*テキストを『Close』に変更*/
  } else {/*そうでない場合*/
    btn.innerHTML = 'Menu';/*テキストを『Menu』に変えてください*/
  }
});
