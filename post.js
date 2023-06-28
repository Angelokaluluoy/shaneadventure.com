let uploadButton = document.getElementById("upload-button");
let chosenImage = document.getElementById("chosen-image");
let fileName = document.getElementById("file-name");
let fileDimension = document.getElementById("fileDimension");

(function() {
    document.querySelector('input[type="file"]').addEventListener("change", function(event) {
        var _size = this.files[0].size;
        var fSExt = new Array('Bytes', 'KB', 'MB', 'GB'),
        i=0;while(_size>900){_size/=1024;i++;}
        var exactSize = (Math.round(_size*100)/100)+' '+fSExt[i];
            console.log('FILE SIZE = ',exactSize);
            document.getElementById("file-size").innerHTML = "File Size : " + " " + (exactSize);
    });
})();

uploadButton.onchange = () => {
  let reader = new FileReader();
  reader.readAsDataURL(uploadButton.files[0]);
  reader.onload = () => {
    chosenImage.setAttribute("src", reader.result);
  };
  fileName.textContent = "Title : "+ " " + uploadButton.files[0].name;
};

console.log("Why are you inspecting?")
