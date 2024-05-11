<form action="/ocr/insert" method="post" enctype="multipart/form-data">
    @csrf
    <label for="image">Pilih file untuk diunggah:</label>
    <input type="file" id="image" name="image">
    <button type="submit">Unggah</button>
  </form>