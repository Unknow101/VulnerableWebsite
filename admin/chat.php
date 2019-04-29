<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=noob;charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT * FROM chat ORDER BY id');
?>
<link href="bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    .chatperson{
  display: block;
  border-bottom: 1px solid #eee;
  width: 100%;
  display: flex;
  align-items: center;
  white-space: nowrap;
  overflow: hidden;
  margin-bottom: 15px;
  padding: 4px;
}
.chatperson:hover{
  text-decoration: none;
  border-bottom: 1px solid orange;
}
.namechat {
    display: inline-block;
    vertical-align: middle;
}
.chatperson .chatimg img{
  width: 40px;
  height: 40px;
  background-image: url('http://i.imgur.com/JqEuJ6t.png');
}
.chatperson .pname{
  font-size: 18px;
  padding-left: 5px;
}
.chatperson .lastmsg{
  font-size: 12px;
  padding-left: 5px;
  color: #ccc;
}

body{
    height:400px;
    position: fixed;
    bottom: 0;
}
.col-md-2, .col-md-10{
    padding:0;
}
.panel{
    margin-bottom: 0px;
    width: 1600px;
}
.chat-window{
    bottom:0;
    position:fixed;
    float:right;
    margin-left:10px;
}
.chat-window > div > .panel{
    border-radius: 5px 5px 0 0;
}
.icon_minim{
    padding:2px 10px;
}
.msg_container_base{
  background: #e5e5e5;
  margin: 0;
  padding: 0 10px 10px;
  max-height:300px;
  overflow-x:hidden;
}
.top-bar {
  background: #666;
  color: white;
  padding: 10px;
  position: relative;
  overflow: hidden;
}
.msg_receive{
    padding-left:0;
    margin-left:0;
}
.msg_sent{
    padding-bottom:20px !important;
    margin-right:0;
}
.messages {
  background: white;
  padding: 10px;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  max-width:100%;
}
.messages > p {
    font-size: 13px;
    margin: 0 0 0.2rem 0;
  }
.messages > time {
    font-size: 11px;
    color: #ccc;
}
.msg_container {
    padding: 10px;
    overflow: hidden;
    display: flex;
}
img {
    display: block;
    width: 100%;
}
.avatar {
    position: relative;
}
.base_receive > .avatar:after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 0;
    border: 5px solid #FFF;
    border-left-color: rgba(0, 0, 0, 0);
    border-bottom-color: rgba(0, 0, 0, 0);
}

.base_sent {
  justify-content: flex-end;
  align-items: flex-end;
}
.base_sent > .avatar:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 0;
    border: 5px solid white;
    border-right-color: transparent;
    border-top-color: transparent;
    box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
}

.msg_sent > time{
    float: right;
}



.msg_container_base::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

.msg_container_base::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

.msg_container_base::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}

.btn-group.dropup{
    position:fixed;
    left:0px;
    bottom:0;
}
form {
	display: block;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
	<div class="row">                 
                 <div class="col-sm-12">
                  <div class="chatbody">
                  <div class="panel panel-primary">
                <div class="panel-heading top-bar">
                    <div class="col-md-12 col-xs-12">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - NOOB</h3>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                    <?php
                        while($data = $reponse->fetch()){
                            $image = $bdd->query('SELECT image FROM users WHERE prenom="'.$data['de'].'"');
                            $image = $image->fetch();
                            if($data['de'] == $_SESSION['username']){
                                ?>
                                    <div class="row msg_container base_sent">
                                        <div class="col-md-10 col-xs-10">
                                            <div class="messages msg_sent">
                                                <p><?php echo $data['message']; ?></p>
                                                <time datetime="2009-11-13T20:00"><?php echo $data['de'] ?></time>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 avatar">
                                            <img src="<?php echo $image["image"] ?>" class=" img-responsive ">
                                        </div>
                                    </div>
                                <?php
                            }
                            else{
                            ?>
                                <div class='row msg_container base_receive'>
                                    <div class="col-md-2 col-xs-2 avatar">
                                        <img src='<?php echo $image["image"] ?>' class=" img-responsive ">
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <div class="messages msg_receive">
                                            <p><?php echo $data['message']; ?></p>
                                            <time datetime="2009-11-13T20:00"><?php echo $data['de'] ?></time>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                        }
                        ?>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Ecrire votre message ici ..." />
                            <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" id="btn-chat"><i class="fa fa-send fa-1x" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </div>
    		</div>

                 </div>
             </div>
</div>
<script type="text/javascript">
	$(".row").on("click", "#btn-chat", function(){
		var plop = $('#btn-input').val();
		$.post( "send.php", { message: plop} );
	});
</script>
