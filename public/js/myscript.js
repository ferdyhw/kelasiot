/*
=====================================================================
                       SWEET ALERT STATUS USER
=====================================================================
*/
const flashData1 = $('.flash-data-1').data('flashdata1');
const flashData2 = $('.flash-data-2').data('flashdata2');

if (flashData1) {
    Swal({
        title: 'Sukses ',
        text: 'Admin berhasil ' + flashData1,
        type: 'success'
    });
}

if (flashData2) {
    Swal({
        title: 'Sukses ',
        text: 'Member berhasil ' + flashData2,
        type: 'success'
    });
}

/*
=====================================================================
                   SWEET ALERT UPDATE ACCOUNT
=====================================================================
*/
const flashData3 = $('.flash-data-3').data('flashdata3');
const flashData4 = $('.flash-data-4').data('flashdata4');
const flashData27 = $('.flash-data-27').data('flashdata27');

if (flashData3) {
    Swal({
        title: 'Sukses ',
        text: 'Profile berhasil ' + flashData3,
        type: 'success'
    });
}

if (flashData4) {
    Swal({
        title: 'Sukses ',
        text: 'Password berhasil ' + flashData4,
        type: 'success'
    });
}

if (flashData27) {
    Swal({
        title: 'Gagal ',
        text: flashData27,
        type: 'error'
    });
}

/*
=====================================================================
                   SWEET ALERT CRUD BASIC
=====================================================================
*/
const flashData5 = $('.flash-data-5').data('flashdata5');
const flashData6 = $('.flash-data-6').data('flashdata6');
const flashData7 = $('.flash-data-7').data('flashdata7');

if (flashData5) {
    Swal({
        title: 'Sukses ',
        text: 'Basic berhasil ' + flashData5,
        type: 'success'
    });
}

if (flashData6) {
    Swal({
        title: 'Sukses ',
        text: 'Basic berhasil ' + flashData6,
        type: 'success'
    });
}

if (flashData7) {
    Swal({
        title: 'Sukses ',
        text: 'Basic berhasil ' + flashData7,
        type: 'success'
    });
}

/*
=====================================================================
                   SWEET ALERT CRUD PROJECT
=====================================================================
*/
const flashData8 = $('.flash-data-8').data('flashdata8');
const flashData9 = $('.flash-data-9').data('flashdata9');
const flashData10 = $('.flash-data-10').data('flashdata10');

if (flashData8) {
    Swal({
        title: 'Sukses ',
        text: 'Project berhasil ' + flashData8,
        type: 'success'
    });
}

if (flashData9) {
    Swal({
        title: 'Sukses ',
        text: 'Project berhasil ' + flashData9,
        type: 'success'
    });
}

if (flashData10) {
    Swal({
        title: 'Sukses ',
        text: 'Project berhasil ' + flashData10,
        type: 'success'
    });
}

/*
=====================================================================
                   SWEET ALERT CRUD QUIZ
=====================================================================
*/
const flashData11 = $('.flash-data-11').data('flashdata11');
const flashData12 = $('.flash-data-12').data('flashdata12');
const flashData13 = $('.flash-data-13').data('flashdata13');

if (flashData11) {
    Swal({
        title: 'Sukses ',
        text: 'Quiz berhasil ' + flashData11,
        type: 'success'
    });
}

if (flashData12) {
    Swal({
        title: 'Sukses ',
        text: 'Quiz berhasil ' + flashData12,
        type: 'success'
    });
}

if (flashData13) {
    Swal({
        title: 'Sukses ',
        text: 'Quiz berhasil ' + flashData13,
        type: 'success'
    });
}

/*
=====================================================================
                   SWEET ALERT CRUD COMPONENT
=====================================================================
*/
const flashData14 = $('.flash-data-14').data('flashdata14');
const flashData15 = $('.flash-data-15').data('flashdata15');
const flashData16 = $('.flash-data-16').data('flashdata16');

if (flashData14) {
    Swal({
        title: 'Sukses ',
        text: 'Component berhasil ' + flashData14,
        type: 'success'
    });
}

if (flashData15) {
    Swal({
        title: 'Sukses ',
        text: 'Component berhasil ' + flashData15,
        type: 'success'
    });
}

if (flashData16) {
    Swal({
        title: 'Sukses ',
        text: 'Component berhasil ' + flashData16,
        type: 'success'
    });
}

/*
=====================================================================
                   SWEET ALERT CRUD QUESTION
=====================================================================
*/
const flashData17 = $('.flash-data-17').data('flashdata17');
const flashData18 = $('.flash-data-18').data('flashdata18');
const flashData19 = $('.flash-data-19').data('flashdata19');

if (flashData17) {
    Swal({
        title: 'Sukses ',
        text: 'Question berhasil ' + flashData17,
        type: 'success'
    });
}

if (flashData18) {
    Swal({
        title: 'Sukses ',
        text: 'Question berhasil ' + flashData18,
        type: 'success'
    });
}

if (flashData19) {
    Swal({
        title: 'Sukses ',
        text: 'Question berhasil ' + flashData19,
        type: 'success'
    });
}

/*
=====================================================================
                   SWEET ALERT CRUD GALLERY
=====================================================================
*/
const flashData20 = $('.flash-data-20').data('flashdata20');
const flashData21 = $('.flash-data-21').data('flashdata21');
const flashData22 = $('.flash-data-22').data('flashdata22');

if (flashData20) {
    Swal({
        title: 'Sukses ',
        text: 'Gallery berhasil ' + flashData20,
        type: 'success'
    });
}

if (flashData21) {
    Swal({
        title: 'Sukses ',
        text: 'Gallery berhasil ' + flashData21,
        type: 'success'
    });
}

if (flashData22) {
    Swal({
        title: 'Sukses ',
        text: 'Gallery berhasil ' + flashData22,
        type: 'success'
    });
}

/*
=====================================================================
                       SWEET ALERT AUTH
=====================================================================
*/
const flashData23 = $('.flash-data-auth1').data('flashdataauth1');
const flashData24 = $('.flash-data-auth2').data('flashdataauth2');
const flashData25 = $('.flash-data-logout').data('flashdatalogout');

if (flashData23) {
    Swal({
        title: 'Sukses ',
        text: flashData23,
        type: 'success'
    });
}

if (flashData24) {
    Swal({
        title: 'Gagal ',
        text: flashData24,
        type: 'error'
    });
}

if (flashData25) {
    Swal({
        title: 'Logout Berhasil ',
        showConfirmButton: false,
        timer: 1500,
        type: 'success'
    });
}

/*
=====================================================================
                       SWEET ALERT COMMENT
=====================================================================
*/
const flashData26 = $('.flash-data-comment').data('flashdatacomment');

if (flashData26) {
    Swal({
        title: 'Sukses ',
        text: 'Comment berhasil ' + flashData26,
        type: 'success'
    });
}

/*
=====================================================================
                       SWEET ALERT DELETE
=====================================================================
*/
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data komik akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});