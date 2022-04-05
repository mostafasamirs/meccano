// Call the dataTables jQuery plugin

$(document).ready(function () {
  // $.noConflict();

  $("#myTable").DataTable({
    stateSave: true,
    select: true,
    magin: 10,
    "pagingType": "full_numbers",
    "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "All"]
    ],
    dom: 'Bfrtip',
    customize: function (win) {
      $(win.document.body).find('table tr td.order-items')
        .css('background-color', 'red');
    },
    extend: 'print',
    // customize: function (win) {
    //   myprint(win)
    // },
    processing: true,
    serverSide: false,
    "deferRender": true,
    "orderClasses": false,
    "ordering": false,

    buttons: [
      'pageLength',
      // 'copyHtml5',
      'excelHtml5',
      'print',
      'selectAll',
      'selectNone',

    ],


    // "language": {
    //     buttons: {
    //         pageLength: "اظهار",
    //         excel: "شيت اكسل",
    //         print: "طباعة",
    //         selectAll: "تحديد الكل ",
    //         selectNone: "عدم التحديد",
    //     },

    //     "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Arabic.json"

    // },




  });

});

$(document).ready(function () {
  // $.noConflict();
  $('#delete_data').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)
    var id = button.data('id')
    var modal = $(this)

    modal.find('.modal-body #id').val(id);
  });

});


///////////// start owl-carousel///////////

    $(".owl-carousel").owlCarousel({
      navigation: true,
      rtl: true,
      loop: true,
      center: true,
      autoplay: true,
      nav: true,
      autoplayTimeout: 1500,
      margin: 20,
      autoHeight: 20,
      pagination: true,
      rewindNav: false,
      responsiveClass: true,

      navText: ['<span class="fas fa-chevron-circle-left fa-3x"></span>', '<span class="fas fa-chevron-circle-right fa-3x"></span>'],
      autoplayHoverPause: true,


      responsive: {
        0: {
          items: 1,
        },
        400: {
          items: 2,
        },
        500: {
          items: 2,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 5,
        },
      }

    });
/////////////end owl-carousel///////////
