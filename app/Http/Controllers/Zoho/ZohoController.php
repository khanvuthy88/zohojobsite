<?php

namespace App\Http\Controllers\Zoho;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Candidate;
use App\Job;
class ZohoController extends Controller
{
    public function getRecords()
    {
    	$token='edb45318c4e0aed21bf42cc622ff8575';
    	$client = new \Humantech\Zoho\Recruit\Api\Client\Client($token);
    	$additionalParams=array('fromIndex'=>44801,'toIndex'=>45000);
		$Candidates = $client->getRecords('Candidates',$additionalParams);
		// return $Candidates;
		foreach ($Candidates as $candidate) {
			$candi=new Candidate();
			$candi->first_name=isset($candidate['First Name']) ? $candidate['First Name'] : 'No first name';
			$candi->last_name=isset($candidate['Last Name']) ? $candidate['Last Name'] : 'No last name';
			$candi->gender=isset($candidate['Gender']) ? $candidate['Gender'] : 'N/A';
			$candi->Phone=isset($candidate['Phone']) ? $candidate['Phone'] : 'N/A';
			$candi->Email=isset($candidate['Email']) ? $candidate['Email'] : 'N/A';
			$candi->Associated_Tags=isset($candidate['Associated Tags']) ? $candidate['Associated Tags'] : 'N/A';
			$candi->Skill_Set=isset($candidate['Skill Set']) ? $candidate['Skill Set'] : 'N/A';
			$candi->Degree=isset($candidate['Degree']) ? $candidate['Degree'] : 'N/A';
			$candi->Experience_in_Years=isset($candidate['Experience in Years']) ? $candidate['Experience in Years'] : 'N/A';
			$candi->Current_Employer=isset($candidate['Current Employer']) ? $candidate['Current Employer'] : 'N/A';
			$candi->Current_Job_Title=isset($candidate['Current Job Title']) ? $candidate['Current Job Title'] : 'N/A';
			$candi->save();
		}
		// foreach ($Candidates as $candidate) {
		// 	if (isset($candidate['CANDIDATEID'])) {
		//         $attachmentList = $client->getRelatedRecords(
		//             'Attachments',
		//             'Candidates',
		//             $candidate['CANDIDATEID']
		//         );
		//         //print_r($attachmentList);
		//         print("<pre>".print_r($attachmentList,true)."</pre>");
		//         // if (isset($attachmentList['id'])) {
		//         //     print_r($client->downloadFile(
		//         //         $attachmentList['id'],
		//         //         'C:\xampp\htdocs\jobsite.local\public\CV'
		//         //     ));
		//         // }
		//     }
		// }
		
    }

    public function getCandidate()
    {
    	$token='edb45318c4e0aed21bf42cc622ff8575';
    	$client = new \Humantech\Zoho\Recruit\Api\Client\Client($token);
    	$additionalParams=array('fromIndex'=>44801,'toIndex'=>45000);
		$Candidates = $client->getRecords('Candidates',$additionalParams);
		// return $Candidates;
		foreach ($Candidates as $candidate) {
			$candi=new Candidate();
			$candi->first_name=isset($candidate['First Name']) ? $candidate['First Name'] : 'No first name';
			$candi->last_name=isset($candidate['Last Name']) ? $candidate['Last Name'] : 'No last name';
			$candi->gender=isset($candidate['Gender']) ? $candidate['Gender'] : 'N/A';
			$candi->Phone=isset($candidate['Phone']) ? $candidate['Phone'] : 'N/A';
			$candi->Email=isset($candidate['Email']) ? $candidate['Email'] : 'N/A';
			$candi->Associated_Tags=isset($candidate['Associated Tags']) ? $candidate['Associated Tags'] : 'N/A';
			$candi->Skill_Set=isset($candidate['Skill Set']) ? $candidate['Skill Set'] : 'N/A';
			$candi->Degree=isset($candidate['Degree']) ? $candidate['Degree'] : 'N/A';
			$candi->Experience_in_Years=isset($candidate['Experience in Years']) ? $candidate['Experience in Years'] : 'N/A';
			$candi->Current_Employer=isset($candidate['Current Employer']) ? $candidate['Current Employer'] : 'N/A';
			$candi->Current_Job_Title=isset($candidate['Current Job Title']) ? $candidate['Current Job Title'] : 'N/A';
			$candi->save();
		}
    }
    public function getPostJob()
    {
    	$token='edb45318c4e0aed21bf42cc622ff8575';
    	$client = new \Humantech\Zoho\Recruit\Api\Client\Client($token);
    	$additionalParams=array('fromIndex'=>601,'toIndex'=>800);
		$JobOpenings = $client->getRecords('JobOpenings',$additionalParams);
		// return $JobOpenings;
		foreach ($JobOpenings as $jobopen) {
			$job=new Job();
			$job->Posting_Title=isset($jobopen['Posting Title']) ? $jobopen['Posting Title'] : 'N/A';
			$job->Job_Type=isset($jobopen['Job Type']) ? $jobopen['Job Type'] : 'N/A';
			$job->Job_Categories=isset($jobopen['Job Categories']) ? $jobopen['Job Categories'] : 'N/A';
			$job->Location=isset($jobopen['Location']) ? $jobopen['Location'] : 'N/A';
			$job->Publish=isset($jobopen['Publish']) ? $jobopen['Publish'] : 'N/A';
			$job->Client_Name=isset($jobopen['Client Name']) ? $jobopen['Client Name'] : 'N/A';
			$job->Contact_Name=isset($jobopen['Contact Name']) ? $jobopen['Contact Name'] : 'N/A';
			$job->Job_Descriptio=isset($jobopen['Job Description']) ? $jobopen['Job Description'] : '0';
			$job->No_of_Candidates_Hired=isset($jobopen['No of Candidates Hired']) ? $jobopen['No of Candidates Hired'] : '0';
			$job->save();
		}
		return 'Yes we go';

    }
}
