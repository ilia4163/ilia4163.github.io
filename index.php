<? include 'config.php'; ?>

<a href="https://graph.facebook.com/oauth/access_token?client_id=<?=ID?>&client_secret=<?=SECRET?>&grant_type=client_credentials">Маркер</a>
<a href="https://graph.facebook.com/{your-user-id}/accounts?access_token={user-access-token}">k</a>
<a href="https://www.facebook.com/v11/dialog/oauth?client_id=<?=ID?>$redirect_uri=<?=URL?>&response_type=code&scope=public_profile,email,user_location">ВОйти в fb</a>
