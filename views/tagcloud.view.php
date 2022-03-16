<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tagcloud</title>

<style type="text/css">
table {
  width: 340px;
  border-collapse: collapse;
}
.tagcloud {
  margin: 0;
  padding: 20px;
  width: 300px;
  border: 1px solid #000;
  text-align: center;
  line-height: 2.8em;
}
.tagcloud li {
  display: inline;
  padding: 0 5px;
}
.tagcloud a {
padding: 0;
}
.tagcloud a.tag1{
  font-size: 0.7em;
  font-weight: 100;
}
.tagcloud a.tag2{
  font-size: 0.7em;
  font-weight: 100;
}
.tagcloud a.tag3{
  font-size: 0.7em;
  font-weight: 100;
}
.tagcloud a.tag4{
  font-size: 0.7em;
  font-weight: 100;
}
.tagcloud a.tag5{
  font-size: 0.7em;
  font-weight: 100;
}
.tagcloud a.tag6{
  font-size: 0.7em;
  font-weight: 100;
}
.tagcloud a.tag7{
  font-size: 0.7em;
  font-weight: 100;
}
.tagcloud a.tag8{
  font-size: 0.7em;
  font-weight: 100;
}
.tagcloud a.tag9{
  font-size: 0.7em;
  font-weight: 100;
}
.tagcloud a.tag10{
  font-size: 0.7em;
  font-weight: 100;
}
</style>

</head>
<body>
  <h1>Tag Cloud</h1>

  <h2>Lists:</h2>
  <?php echo $data['tag_list']; ?>

  <h2>Cloud:</h2>
  <?php echo $data['tag_cloud']; ?>

</body>
</html>