const inputFile = document.getElementById('inputFile');

inputFile.addEventListener('change', function() {
  const file = this.files[0];
  
  if (file && file.type.startsWith('image/')) {
    const reader = new FileReader();
    
    reader.addEventListener('load', function() {
      const imageDataUrl = reader.result;
      
      // Faça o que quiser com a imagem, como exibi-la em uma tag <img>
      const img = document.createElement('img');
      img.src = imageDataUrl;
      document.body.appendChild(img);
    });
    
    reader.readAsDataURL(file);
  }
});
