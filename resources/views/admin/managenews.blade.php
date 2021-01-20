<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Manage Blog</title>
</head>
<body id="page-top">
@include('admin/header')
	  <div id="wrapper">

@include('admin/leftbar')
      <div id="content-wrapper">

        <div class="container-fluid">
 <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Manage News</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S.N.</th>
                      <th>News Title</th>
                      <th>Post By</th>
                      <th>News Details</th>
                    </tr>
                  </thead>  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>NAC Airbus deal: House sub-committee recommends action against sitting minister, two former ministers, 3 secretaries and NAC general manager</td>
                      <td>Bikash Subedi</td>
                      <td>The sub-committee under the Parliament Accounts Committee (PAC) has concluded that Rs 4.3 billion was embezzled while procuring two wide-body aircrafts for the Nepal Airlines Corporation (NAC). The subcommittee, in its report which was submitted at the PAC on Wednesday, has recommended action against one sitting minister, two former ministers and three secretaries for being involved in the irregularity.</td>
                    </tr>
                  <tr>
                      <td>2.</td>
                      <td>NOC slashes fuel prices by 2 per litre</td>
                      <td>Bikash Subedi</td>
                      <td>Newly appointed Chief Justice Cholendra Shumsher JB Rana took the oath of office and secrecy on Wednesday. President Bidya Devi Bhandari has administered oath to the newly appointed Chief Justice amidst a ceremony at the Office of President, Shital Niwas. The swearing-in ceremony was held on the witnesses of Vice President Nanda Bahadur Pun, Prime Minister KP Sharma Oli, Speaker Krishna Bahadur Mahara, Minister for Law, Justice and Federal Affairs Bhanubhakta Dhakal and the Supreme Court (SC) judge.</td>
                    </tr>
                  <tr>
                      <td>3.</td>
                      <td>Dr KC puts off protest plan</td>
                      <td>Bikash Subedi</td>
                      <td>Senior orthopedic surgeon at the Maharajgunj-based Tribhuvan University Teaching Hospital (TUTH) Govinda KC has postponed his planned hunger strike till January 9. The anti-corruption crusader decided to put off his hunger strike after the Chairperson of the Education and Health Committee of the Parliament sought one week time to endorse the Medical Education Bill as per the agreement.</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>