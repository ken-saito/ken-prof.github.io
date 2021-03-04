<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST2</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    <!--リセットCSS（各ブラウザのデフォルトのCSSをリセットする）-->
    <!--レスポンシブ-->
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
  Ï<div class="header">
    <div class="header-left">Progate</div>
  </div>
  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">

      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <!-- を受け取りechoしましょう -->
      <?php echo $_POST['お名前']; ?>
      <div class="form-item">■ 内容</div>
      <!-- を受け取りechoしましょう -->
      <?php echo $_POST['メールアドレス']; ?>
    </div>
  </div>
</body>
</html>