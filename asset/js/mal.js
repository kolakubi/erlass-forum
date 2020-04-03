// panggil ck editor
// cek jika ada element textarea
const textareaIsiPost = $('textarea[name=isipost]');
if(textareaIsiPost.length){
    CKEDITOR.replace( 'isipost' , {
        removeButtons: 'Source',
        // The rest of options...
    } );
}

// peringatan saat menghapus data
function peringatanSaatHapusData(){
    $('.btn-lulus').on('click', function(event){
      
      let link = $(this).attr('href');
      if(confirm('Anda yakin akan meluluskan member ini?')){
        return true;
      }
      return false;
    })
  }

  peringatanSaatHapusData();
///////////////////////////////////////////////////////////



// peringatan saat edit data
function peringatanSaatEditData(){
    $('.btnedit').on('click', function(event){
      
      let link = $(this).parent().attr('action');
      if(confirm('Anda yakin akan mengubah data?')){
        return true;
      }
      return false;
    })
  }

  peringatanSaatEditData();
///////////////////////////////////////////////////////////

console.log('malq .js');