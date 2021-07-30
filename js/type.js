
let select = document.getElementById("productType");

type.innerHTML = `
  <label for="book">Weight (KG)</label>
  <input name="book" id="weight" type="text" required/>
  <p>Please provide weight.</p>
`;

function dvd() {
  return `
      <label for="dvd">Size (MB)</label>
      <input name="dvd" id="size" type="text" required/>
      <p>Please provide size.</p>
      `;
}
function book() {
  return `
      <label for="book">Weight (KG)</label>
      <input name="book" id="weight" type="text" required/>
      <p>Please provide weight.</p>
      `;
}
function furniture() {
  return `
      <label for="height">Height (CM)</label>
      <input name="height" id="height" type="text" required/>
      <label for="width">Width (CM)</label>
      <input name="width" id="width" type="text" required/>
      <label for="length">Length (CM)</label>
      <input name="length" id="length" type="text" required/>
      <p>Please provide dimensions in HxWxL format.</p>
      `;
}

function typeData(type) {
  $("#type").html(window[type]());
}

window.addEventListener("DOMContentLoaded", (event) => {
  $("#productType").change(function () {
    var selectedType = $("#productType").val();
    typeData(selectedType);
  });
});
