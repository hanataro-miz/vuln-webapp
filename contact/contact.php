<!-- <body>
問い合わせフォーム<br>
<form action="send_mail.php" method="POST">
メール:<input type="text" name="from"><br>
本文:<textarea name="body" rows="4" cols="30">
</textarea><br>
<input type="submit" value="送信">
</form>
</body> -->

<body>
    <form action="send_mail.php" method="POST">
        <h2>お問い合わせ</h2>
        <p>メールアドレス</p>
        <input type="text" name="mail">
        <p>お問い合わせ内容</p>
        <textarea name="inqu" cols="20" rows="3"/></textarea>
        <input type="submit" value="送信">
    </form>
</body>