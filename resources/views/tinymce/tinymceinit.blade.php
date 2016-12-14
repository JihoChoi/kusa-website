<script type="text/javascript">
tinymce.init({
  selector: 'textarea',
  height: 500,
  menubar: true,
  plugins: [
    'image imagetools preview emoticons media wordcount textcolor',
    'spellchecker searchreplace tabfocus table template'
  ],
  file_picker_types: 'file image media',
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor',
  textcolor_map: [
     "000000", "Black",
     "993300", "Burnt orange",
     "333300", "Dark olive",
     "003300", "Dark green",
     "003366", "Dark azure",
     "000080", "Navy Blue",
     "333399", "Indigo",
     "333333", "Very dark gray",
     "800000", "Maroon",
     "FF6600", "Orange",
     "808000", "Olive",
     "008000", "Green",
     "008080", "Teal",
     "0000FF", "Blue",
     "666699", "Grayish blue",
     "808080", "Gray",
     "FF0000", "Red",
     "FF9900", "Amber",
     "99CC00", "Yellow green",
     "339966", "Sea green",
     "33CCCC", "Turquoise",
     "3366FF", "Royal blue",
     "800080", "Purple",
     "999999", "Medium gray",
     "FF00FF", "Magenta",
     "FFCC00", "Gold",
     "FFFF00", "Yellow",
     "00FF00", "Lime",
     "00FFFF", "Aqua",
     "00CCFF", "Sky blue",
     "993366", "Red violet",
     "FFFFFF", "White",
     "FF99CC", "Pink",
     "FFCC99", "Peach",
     "FFFF99", "Light yellow",
     "CCFFCC", "Pale green",
     "CCFFFF", "Pale cyan",
     "99CCFF", "Light sky blue",
     "CC99FF", "Plum"
   ],
   /*setup: function(editor) {
           var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
           $(editor.getElement()).parent().append(inp);

           inp.on("change",function(){
               var input = inp.get(0);
               var file = input.files[0];
               var fr = new FileReader();
               fr.onload = function() {
                   var img = new Image();
                   img.src = fr.result;
                   editor.insertContent('<img src="'+img.src+'"/>');
                   inp.val('');
               }
               fr.readAsDataURL(file);
           });

           editor.addButton( 'imageupload', {
               text:"Local image upload",
               icon: false,
               onclick: function(e) {
                   inp.trigger('click');
               }
           });
       }*/


});
</script>
