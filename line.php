 <?php
  

function send_LINE($msg){
 $access_token = 'fW7ifcOThC8cBWF1blDHP0zeIwV5DTsCV09C51Qxy1WWJTsA3uYI8qOGmvTc2dAfZl8O4B5rop2DvtKv57M2hhZRAAXwUj/FZUUoOnn537zRF4sfIwKoUA72JMcOUogoxEYPDlx8yHtWEiECA57hyAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        'text' => $ON
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U54936e2b36e7f8a41604e28ee06a4e9f',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
