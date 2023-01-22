<?php
//   $from = filter_input(INPUT_POST, 'from');
//   $body = filter_input(INPUT_POST, 'body');
//   mb_language('Japanese');
//   mb_send_mail("wasbook@example.jp", "問い合わせがありました",
//     "以下の問い合わせがありましたので対応お願いします\n\n" . $body,
//      "From: " . $from);
    $mail = filter_input(INPUT_POST, 'mail');
    system("/usr/sbin/sendmail -i <template.txt $mail");
?>
<body>
送信しました
<?php //echo $from ?>
</body>