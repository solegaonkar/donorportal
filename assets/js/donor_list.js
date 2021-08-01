$(document).ready(function(){
    $('#donortable').DataTable({
        'processing': true,
        'serverSide': true,
        "lengthMenu": [[5,10, 25, 50], [5, 10, 25, 50]],
        'serverMethod': 'post',
        "scrollX": true,
        'ajax': {
            'url':'DonorListAjaxFile.php'
        },
        'columns': [
            {data : 'srno'},
            {data : 'action'},
            { data: 'did' },
            { data: 'fullname' },
            { data: 'address1' },
            { data: 'address2' },
            { data: 'address3' },
            { data: 'district' },
            { data: 'city' },
            { data: 'mobile' },
            { data: 'landline' },
            { data: 'altnumber' },
            { data: 'email' },
            { data: 'iscompany' },
            { data: 'isvip' },
            { data: 'donorcat' },
            { data: 'details' },
        ]
    });
});