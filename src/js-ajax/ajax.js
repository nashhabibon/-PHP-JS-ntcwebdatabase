$(document).ready(function () {
  /*..................................................USERS .....................................................................*/

  /* add user*/

  $(document).on("click", "#btn-add", function (e) {
    var valid = this.form.checkValidity();

    if (valid) {
      var data = $("#add-form").serialize();

      $.ajax({
        data: data,
        type: "post",
        url: "action/add-new-user.php",
        success: function (dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            Swal.fire({
              icon: "success",
              title: "User Saved.",
              text: "Success!",
            }).then(function () {
              window.location = "users.php";
            });
          } else if (dataResult.statusCode == 201) {
            alert(dataResult);
          }
        },
      });
    } else {
      alert("There's still an empty field", "Input all fields");
    }
  });

  /* delete function*/
  $(document).on("click", "#deletebtn", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");

    swal
      .fire({
        icon: "warning",
        title: "Are you sure you want to delete this record?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      })
      .then((result) => {
        if (result.value) {
          document.location.href = href;
          Swal.fire({
            icon: "success",
            title: "Success Deleted",
            text: "User has been deleted!",
          });
          window.location.reload();
        }
      });
  });

  /* update user*/
  $(document).on("click", "#updatebtn", function (e) {
    var valid = this.form.checkValidity();

    if (valid) {
      var data = $("#update-form").serialize();

      $.ajax({
        data: data,
        type: "post",
        url: "action/action-update-user.php",

        success: function (dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            Swal.fire({
              icon: "success",
              title: "User Updated.",
              text: "Success!",
            }).then(function () {
              window.location = "users.php";
            });
          } else if (dataResult.statusCode == 201) {
            alert(dataResult);
          }
        },
      });
    } else {
      alert("There's still an empty field", "Input all fields");
    }
  });

  /*..................................................RLMP .....................................................................*/

  /* add rlmp*/

  $(document).on("click", "#btn-addrlmp", function (e) {
    var validform = this.form.checkValidity();

    if (validform) {
      var data = $("#rlmpform").serialize();

      $.ajax({
        data: data,
        type: "post",
        url: "action/action-rlmp-add.php",
        success: function (dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            Swal.fire({
              icon: "success",
              title: "Operator Saved.",
              text: "Success!",
            });
          } else if (dataResult.statusCode == 1) {
            Swal.fire({
              icon: "error",
              title: "RLMP NUMBER ALREADY EXIST",
            });
          }
        },
      });
    } else {
      alert("Input all fields");
    }
  });

  /* update RLMP*/
  $(document).on("click", "#btn-updaterlmp", function (e) {
    var valid = this.form.checkValidity();

    if (valid) {
      var data = $("#rlmpupdateform").serialize();

      $.ajax({
        data: data,
        type: "post",
        url: "action/action-rlmp-update.php",

        success: function (dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            Swal.fire({
              icon: "success",
              title: "Updated.",
              text: "Success!",
            });
            window.location.reload();
          } else if (dataResult.statusCode == 202) {
            Swal.fire({
              icon: "success",
              title: "Record Added.",
              text: "Success!",
            });
            window.location.reload();
          } else if (dataResult.statusCode == 201) {
            Swal.fire({
              icon: "error",
              title: "Error on Update",
              text: "Error!",
            });
          }
        },
      });
    } else {
      alert("There's still an empty field", "Input all fields");
    }
  });

  /*..................................................MOBILE PHONE .....................................................................*/

  /* add mobilephone permits*/

  $(document).on("click", "#btn-addMobile", function (e) {
    var validform = this.form.checkValidity();

    if (validform) {
      var data = $("#mobile_add").serialize();

      $.ajax({
        data: data,
        type: "post",
        url: "action/action_mobile_add.php",
        success: function (dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            Swal.fire({
              icon: "success",
              title: "Permit Saved.",
              text: "Success!",
            });
            window.location.reload();
          } else if (dataResult.statusCode == 1) {
            Swal.fire({
              icon: "error",
              title: "PERMIT NUMBER ALREADY EXIST",
            });
          }
        },
      });
    } else {
      alert("Input all fields");
    }
  });

  /* update mobilephone permits*/
  $(document).on("click", "#btn-updateMobile", function (e) {
    var valid = this.form.checkValidity();

    if (valid) {
      var data = $("#update_mobileform").serialize();

      $.ajax({
        data: data,
        type: "post",
        url: "action/action_mobile_update.php",

        success: function (dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 201) {
            Swal.fire({
              icon: "success",
              title: "Record Added.",
              text: "Success!",
            });
            window.location.reload();
          }
          if (dataResult.statusCode == 203) {
            Swal.fire({
              icon: "success",
              title: "Record Updated.",
              text: "Success!",
            });
            window.location.reload();
          } else if (dataResult.statusCode == 202) {
            Swal.fire({
              icon: "error",
              title: "Error on Update",
              text: "Error!",
            });
          } else if (dataResult.statusCode == 200) {
            Swal.fire({
              icon: "error",
              title: "OR NUMBER EXIST",
              text: "Error!",
            });
          } else if (dataResult.statusCode == 204) {
            Swal.fire({
              icon: "error",
              title: "PERMIT NUMBER EXIST",
              text: "Error!",
            });
          }
        },
      });
    } else {
      alert("There's still an empty field", "Input all fields");
    }
  });

  /* add roc*/

  $(document).on("click", "#btn-addroc", function (e) {
    var validform = this.form.checkValidity();

    if (validform) {
      var data = $("#rocform").serialize();

      $.ajax({
        data: data,
        type: "post",
        url: "action/action_roc_add.php",
        success: function (dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            Swal.fire({
              icon: "success",
              title: "Saved.",
              text: "Success!",
            });
            window.location.reload();
          } else if (dataResult.statusCode == 1) {
            Swal.fire({
              icon: "error",
              title: "REGISTRATION NUMBER ALREADY EXIST",
            });
          } else if (dataResult.statusCode == 202) {
            Swal.fire({
              icon: "error",
              title: "ERROR ON QUERY",
            });
          }
        },
      });
    } else {
      alert("Input all fields");
    }
  });

  /*..................................................OTHER FUNCTION .....................................................................*/

  $("#tablerow #colortype").each(function () {
    if ($(this).text() == "Admin") {
      $(this).css("color", "red");
    } else if ($(this).text() == "Engineer") {
      $(this).css("color", "blue");
    } else if ($(this).text() == "Encoder") {
      $(this).css("color", "green");
    }
  });

  $("#province").on("change", function () {
    var countryId = $(this).val();
    $.ajax({
      url: "fetchProvince.php",
      type: "POST",
      cache: false,
      data: { countryId: countryId },
      success: function (data) {
        $("#City").html(data);
        $("#Brgy").html('<option value="">Select City First</option>');
      },
    });
  });

  //user type color
  $("#tablerow #colortype").each(function () {
    if ($(this).text() == "Admin") {
      $(this).css("color", "red");
    } else if ($(this).text() == "Engineer") {
      $(this).css("color", "blue");
    } else if ($(this).text() == "Encoder") {
      $(this).css("color", "green");
    }
  });

  //rlmp validity color
  $("#tablerow #dateexpiry").each(function () {
    var dt = new Date(); //get date today
    var exp = new Date($(this).text());

    if (dt < exp) {
      $(this).css("color", "green");
    } else {
      $(this).css("color", "red");
    }
  });

  // state dependent ajax
  $("#City").on("change", function () {
    var stateId = $(this).val();
    $.ajax({
      url: "fetchProvince.php",
      type: "POST",
      cache: false,
      data: { stateId: stateId },
      success: function (data) {
        $("#Brgy").html(data);
      },
    });
  });

  //auto date validity in mobile phone
  $("#dateIssued").on("change", function () {
    const dt = new Date($(this).val());
    var expYr = dt.getFullYear() + 1;
    var expMonth = dt.getMonth() + 1;
    var expDay = dt.getDate() - 1;

    var expDate = `${expYr}-${
      expMonth > 9 ? expMonth : "0" + expMonth
    }-${expDay}`;

    $("#dateExpiry").val(expDate);
  });

  // fetch regno in roc
  $("#type").on("change", function () {
    var type = $(this).val();
    $.ajax({
      url: "fetchRegNo.php",
      type: "POST",
      cache: false,
      data: { type: type },
      success: function (data) {
        $("#regNO").val(data);
      },
    });
  });
});
