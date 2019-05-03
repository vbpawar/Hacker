<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Help For Disaster</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  </head>
  <body>
    <div class="ui container" style="margin-top:30px;">
      <div class="ui placeholder segment">
  <div class="ui two column very relaxed stackable grid">
    <div class="column">
      <div class="ui form">
        <div class="field">
          <label>Sender</label>
          <div class="ui left icon input">
            <input type="text" placeholder="Your Contact number" id="sender">
            <i class="user icon"></i>
          </div>
        </div>
        <div class="field">
          <label>Reciever</label>
          <div class="ui left icon input">
            <input type="text" placeholder="Contact number" id="reciever">
            <i class="user icon"></i>
          </div>
        </div>
        <div class="ui inverted green  animated button" onclick="callVoiceApi()">
  <div class="hidden content">Call</div>
  <div class="visible content">
    <i class="phone icon"></i>
  </div>
</div>
      </div>
    </div>
    <div class="middle aligned column">
      <div class="column">
        <div class="ui form">
          <div class="field">
            <label>Reciever</label>
            <div class="ui left icon input">
              <input type="text" placeholder="Contact Number" id="smsSender">
              <i class="user icon"></i>
            </div>
          </div>
          <div class="field">
            <label>Messgae Text</label>
            <textarea rows="2" id="msg"></textarea>
          </div>
          <div class="ui blue submit button" onclick="callSmsApi()">Message</div>
        </div>
      </div>
    </div>
  </div>
  <div class="ui vertical divider">
    Or
  </div>
</div>
  </div>
  <script type="text/javascript">
    function callVoiceApi(){
      var sender = $('#sender').val();
      var reciever = $('#reciever').val();
      $.ajax({
        url:'CallingVoiceApi.php',
        Type:'POST',
        data:({
          sender:sender,
          reciever:reciever
        }),
        success:function(response){
          alert(response);
        }
      });
    }
    function callSmsApi(){
      var smsSender = $('#smsSender').val();
      var msg = $('#msg').val();
      $.ajax({
        url:'CallingSmsApi.php',
        Type:'POST',
        data:({
          smsSender:smsSender,
          msg:msg
        }),
        success:function(response){
          alert(response);
        }
      });
    }
  </script>
  </body>
</html>
