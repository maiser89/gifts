





var fruit = ["apple", "orange", "pear"];
$(".foo").text(fruit.length);

var modal = document.getElementById("myModal");
var span = $(".close");
var ing = $("#myModal");

// span.onclick = function() {
//   modal.style.display = "none";
// };

span.on("click", function() {
    modal.style.display = "none";
});
ing.on("click", function() {
    modal.style.display = "none";
});
// Get all images and insert the clicked image inside the modal
// Get the content of the image description and insert it inside the modal image caption
var images = document.getElementsByTagName("img");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var i;
for (i = 0; i < images.length; i++) { // looping through all image tag names in document. on click of image, run function of displaying modal with source URL, alt text, and caption
  images[i].onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.nextElementSibling.innerHTML;
  };
}

$(".printbtn").click(function () {
    //Hide all other elements other than printarea.
    $(".printbtn").hide();
   $("#btn").hide();
     $(".mkhiu").hide();
   $(".MA-contactus.ma2").hide();
    $(".MA-contactus.ma").hide();
    window.print();
   $(".printbtn").show();
    $("#btn").show(); 
    $(".mkhiu").show();
    $(".MA-contactus.ma2").show();
     $(".MA-contactus.ma").show();
});

function handleFileSelect(e) {

  if (!e.target.files || !window.FileReader) return;

  selDiv.innerHTML = "";

  var files = e.target.files;
  var filesArr = Array.prototype.slice.call(files);
  filesArr.forEach(function(f,i) {
    var f = files[i];
    if (!f.type.match("image.*")) {
      return;
    }

    var reader = new FileReader();
    reader.onload = function(e) {
      var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
      selDiv.innerHTML += html;
    }
    reader.readAsDataURL(f);
  });

}
function handleFileSelect(e) {

  if (!e.target.files || !window.FileReader) return;

  selDiv.innerHTML = "";

  var files = e.target.files;
  var filesArr = Array.prototype.slice.call(files);
  filesArr.forEach(function(f,i) {
    var f = files[i];
    if (!f.type.match("image.*")) {
      return;
    }

    var reader = new FileReader();
    reader.onload = function(e) {
      var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
      selDiv.innerHTML += html;
    }
    reader.readAsDataURL(f);
  });

}
function handleFileSelect(e) {

  if (!e.target.files || !window.FileReader) return;

  selDiv.innerHTML = "";

  var files = e.target.files;
  var filesArr = Array.prototype.slice.call(files);
  filesArr.forEach(function(f,i) {
    var f = files[i];
    if (!f.type.match("image.*")) {
      return;
    }

    var reader = new FileReader();
    reader.onload = function(e) {
      var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
      selDiv.innerHTML += html;
    }
    reader.readAsDataURL(f);
  });

}
function handleFileSelect(e) {

  if (!e.target.files || !window.FileReader) return;

  selDiv.innerHTML = "";

  var files = e.target.files;
  var filesArr = Array.prototype.slice.call(files);
  filesArr.forEach(function(f,i) {
    var f = files[i];
    if (!f.type.match("image.*")) {
      return;
    }

    var reader = new FileReader();
    reader.onload = function(e) {
      var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
      selDiv.innerHTML += html;
    }
    reader.readAsDataURL(f);
  });

}
 $(document).ready(function() {
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        var
        $container = $(input).closest('.upload'), // Find relative .upload container
        $preview = $container.find('.img-preview'), // Find relative .img-preview in the container
        $uploadedImage = $container.find('.uploaded-image'), // Find relative .uploaded-image in the container
        $addImage = $container.find('.add-image'); // Find relative .add-image in the container

        reader.onload = function(e) {
          
		  // Use relative elements in your code
          $preview.attr('src', e.target.result);
          if ($uploadedImage.is(':hidden')) {
            $uploadedImage.toggleClass("hidden")
            $addImage.toggleClass("hidden")
          }
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $(".imgInp").change(function() {
      readURL(this);
    });

  });