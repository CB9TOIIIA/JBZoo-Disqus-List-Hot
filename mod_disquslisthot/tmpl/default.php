<div class="disquslisthot" class="<?php echo $moduleclass_sfx ?>">
<?php
$forumid = $params['forumid'];
$apikey = $params['apikey'];
$limit = $params['limit'];
if ($params['apikey'] !='') {
$get_disquslistHot = file_get_contents("https://disqus.com/api/3.0/threads/listHot.json?forum=$forumid&api_key=$apikey&limit=$limit");
$contentdisquslistHot = json_decode($get_disquslistHot, true);
// SEE ALL DATA
// echo "<pre>";
// var_dump($contentdisquslistHot);
// echo "</pre>";

foreach ($contentdisquslistHot['response'] as $details) {
  $linktoarticleslistHot = $details['link'];
  $titlelistHot = $details['title'];
  $postslistHot = $details['posts'];
  $createdAtlistHot = $details['createdAt'];
  $createdAtformatlistHot = date('d.m.y H:i:s', strtotime($createdAtlistHot));
  echo "<blockquote>";
  echo "<p><a class='avatarandurlcomment' href='".$linktoarticleslistHot."'>".$titlelistHot."</a></p>";
  echo "<span class='smalldate'>".$createdAtformatlistHot."</span>";
  echo("<footer>Кол-во комментариев: ".$postslistHot)."</footer>";
  echo "</blockquote>";
  }
}
?>
</div>