var checkboxes = document.querySelectorAll(".isDoneCheckbox");
  var submitButtons = document.querySelectorAll(".submitButton");

  checkboxes.forEach(function (checkbox, index) {
    checkbox.addEventListener("click", function () {
      submitButtons[index].click();
    });
  });