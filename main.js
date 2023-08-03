

// S slider index

let slideIndex = 0
showSlides()

function showSlides() {
  let i
  let slides = document.getElementsByClassName("mySlides")
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"
  }
  slideIndex++
  if (slideIndex > slides.length) {
    slideIndex = 1
  }
  slides[slideIndex - 1].style.display = "block"
  setTimeout(showSlides, 2000) // Change image every 2 seconds
}

// E slider index

// S preview edit image

function previewImg() {
  const sampul = document.querySelector("#gambar")

  const sampulLabel = document.querySelector(".custom-file-label")
  const imgPreview = document.querySelector(".img-preview")

  sampulLabel.textContent = sampul.files[0].name

  const fileSampul = new FileReader()
  fileSampul.readAsDataURL(sampul.files[0])

  fileSampul.onload = function (e) {
    imgPreview.src = e.target.result
  }
}

// E preview edit image