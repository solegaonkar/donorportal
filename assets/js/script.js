function filtercheck()
	{
		var errorstring ="";
		var daterange = document.getElementById('daterange');
		
		if(daterange == "")
			errorstring = errorstring + "Daterange is compulsory";
			
		if(errorstring != "")
		{
			document.getElementById("erroroutput").innerHTML = '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Error!</strong><br>'+ errorstring +'</div>';
			return false;
		}
		else
		{
			document.getElementById("erroroutput").innerHTML = "";
			return true;
		}
	}

	$(".select2").select2();
	//Date range picker
    $('#daterange').daterangepicker(
	{
		startDate: '01/01/2008'
	});
	
  $(function () {
    $('#donortable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true	,
      "ordering": true,
      "info": true,
      "autoWidth": false,
	  "scrollX": true
	  //"sDom": "Rlfrtip""
    });
  });
  
    function convert_to_words(value) 
    {
		var junkVal= value
		junkVal=Math.floor(junkVal);
		var obStr=new String(junkVal);
		numReversed=obStr.split("");
		actnumber=numReversed.reverse();

		if(Number(junkVal) >=0){
			//do nothing
		}
		else{
			alert('wrong Number cannot be converted');
			return false;
		}
		if(Number(junkVal)==0){
			document.getElementById('container').innerHTML=obStr+''+'Rupees Zero Only';
			return false;
		}
		if(actnumber.length>9){
			alert('Oops!!!! the Number is too big to covertes');
			return false;
		}

		var iWords=["Zero", " One", " Two", " Three", " Four", " Five", " Six", " Seven", " Eight", " Nine"];
		var ePlace=['Ten', ' Eleven', ' Twelve', ' Thirteen', ' Fourteen', ' Fifteen', ' Sixteen', ' Seventeen', ' Eighteen', ' Nineteen'];
		var tensPlace=['dummy', ' Ten', ' Twenty', ' Thirty', ' Forty', ' Fifty', ' Sixty', ' Seventy', ' Eighty', ' Ninety' ];

		var iWordsLength=numReversed.length;
		var totalWords="";
		var inWords=new Array();
		var finalWord="";
		j=0;
		for(i=0; i<iWordsLength; i++){
			switch(i)
			{
			case 0:
				if(actnumber[i]==0 || actnumber[i+1]==1 ) {
					inWords[j]='';
				}
				else {
					inWords[j]=iWords[actnumber[i]];
				}
				inWords[j]=inWords[j]+' Only';
				break;
			case 1:
				tens_complication();
				break;
			case 2:
				if(actnumber[i]==0) {
					inWords[j]='';
				}
				else if(actnumber[i-1]!=0 && actnumber[i-2]!=0) {
					inWords[j]=iWords[actnumber[i]]+' Hundred and';
				}
				else {
					inWords[j]=iWords[actnumber[i]]+' Hundred';
				}
				break;
			case 3:
				if(actnumber[i]==0 || actnumber[i+1]==1) {
					inWords[j]='';
				}
				else {
					inWords[j]=iWords[actnumber[i]];
				}
				if(actnumber[i+1] != 0 || actnumber[i] > 0){
					inWords[j]=inWords[j]+" Thousand";
				}
				break;
			case 4:
				tens_complication();
				break;
			case 5:
				if(actnumber[i]==0 || actnumber[i+1]==1) {
					inWords[j]='';
				}
				else {
					inWords[j]=iWords[actnumber[i]];
				}
				if(actnumber[i+1] != 0 || actnumber[i] > 0){
					inWords[j]=inWords[j]+" Lakh";
				}
				break;
			case 6:
				tens_complication();
				break;
			case 7:
				if(actnumber[i]==0 || actnumber[i+1]==1 ){
					inWords[j]='';
				}
				else {
					inWords[j]=iWords[actnumber[i]];
				}
				inWords[j]=inWords[j]+" Crore";
				break;
			case 8:
				tens_complication();
				break;
			default:
				break;
			}
			j++;
		}

		function tens_complication() {
			if(actnumber[i]==0) {
				inWords[j]='';
			}
			else if(actnumber[i]==1) {
				inWords[j]=ePlace[actnumber[i-1]];
			}
			else {
				inWords[j]=tensPlace[actnumber[i]];
			}
		}
		inWords.reverse();
		for(i=0; i<inWords.length; i++) {
			finalWord+=inWords[i];
		}
		return finalWord;
	}

  function dottedLine(doc, xFrom, yFrom, xTo, yTo, segmentLength)
	{
		// Calculate line length (c)
		var a = Math.abs(xTo - xFrom);
		var b = Math.abs(yTo - yFrom);
		var c = Math.sqrt(Math.pow(a,2) + Math.pow(b,2));

		// Make sure we have an odd number of line segments (drawn or blank)
		// to fit it nicely
		var fractions = c / segmentLength;
		var adjustedSegmentLength = (Math.floor(fractions) % 2 === 0) ? (c / Math.ceil(fractions)) : (c / Math.floor(fractions));

		// Calculate x, y deltas per segment
		var deltaX = adjustedSegmentLength * (a / c);
		var deltaY = adjustedSegmentLength * (b / c);

		var curX = xFrom, curY = yFrom;
		while (curX <= xTo && curY <= yTo)
		{
			doc.line(curX, curY, curX + deltaX, curY + deltaY);
			curX += 2*deltaX;
			curY += 2*deltaY;
		}
	}

	function getreceiptdata(did, tid)
	{
		var did = did;
		var tid = tid;
		
		$.ajax({
			type: 'post',
			async: false,
			url: 'receiptajax.php',
			data: {did:did, tid:tid},
			success: function (response) {
				data = response;
				//callback.call(data);
			},
			error: function () {}
		});
		return data; // return 
	}
	
	function gettodaydate()
	{
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();

		if(dd<10) {
			dd='0'+dd
		} 

		if(mm<10) {
			mm='0'+mm
		} 

		today = dd+'/'+mm+'/'+yyyy;
		return today;
	}
