<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
        
        public function test2()
        {
                return view('admin.index');
        }


	public function index() 
	{
		//return view('test.index');	

               return \App\Image::create([
                        'section' => 'branch',
                        'file' => 'mbr-5-2000x1333.jpg', 
                ]);

		/*return \App\Content::create([
	        'hero_header' => 'Your Manpower Needs Our Specialty',
	    	'hero_lead' => 'We know that it is your utmost concern to staff your organization with quality people at all times and we, at Service Resources, Inc. can assist you.',
	    	'hero_btn' => 'LEARN MORE',
	    	'hero_link' => 'content6-19',
	    	'about_title' => 'About Us',
	    	'about_text' => '<p>
                Established in August 1979, our company continues to be one of the leading manpower service companies in the country. With clients in many local and multinational corporations for various job levels, our steady guiding principle is to serve our client firms in their manpower outsourcing needs as efficiently and economically as possible consistent with all existing laws and regulations. Our success throughout these years demonstrates the soundness of our goals.
                <p>
                </br>
                <p>
                Founder of SRI is Atty. Jose T. Alberto with over twenty years experience in corporate management-labor relations. Management counts with it a tightly knit team of dedicated individuals, each an expert in his or her field such as in marketing, recruitment and selection of manpower, worker supervision, labor cost accounting, payroll management, client relations, and labor regulations.
                </p>
                </br>
                <p>
                At SRI, we listen to our clients’ needs to further enhance our business partnership. We develop systems and procedures that suit the unique requirements of each individual client, translating into an integrated and flexible approach to all our business solutions.
                </p>
                </br>
                <p>
                We believe in excellent customer service. It has always been our culture to deliver conscientious quality assistance, professional expertise and support in satisfying our clients’ manpower needs with personnel that meet their work standards when and where needed at the most economical rates.
                </p>
                </br>
                <p>To further galvanize our commitment in bringing quality service and deliver much more than the expectations of our clients, we are happy to announce that Service Resources, Inc. now has an ISO 9001:2008 Certified Quality Management System in place to further assure the quality of services rendered.
                </p>
                </br>
                <p>
                With continued positive outlook at the Philippine economy, SRI looks forward with confidence in contributing to the national economic prosperity and provide meaningful employment opportunities to thousands of Filipinos by continuing to serve the manpower outsourcing industry.
                </p>',
	    	'feature_title' => 'Special Features of Our Manpower Outsourcing Service',
	    	'feature_text' => '<li>We spare our clients from the normal routine of recruitment which may begin with expensive advertisement to rigorous interviews, Psychological testing and selections;</li><li>We conduct/administer preliminary qualifying tests for short listing of candidates, which is the main part of the selection procedure. Candidates who do not have the required level of intellectual ability or who possess personality traits that are inconsistent with the kind of work specified are disqualified based on results of psychological testing, interviews and background investigation ;</li><li>We adopt rigid and comprehensive medical examinations for our employees conducted by very competent medical practitioners to assure our clients that the employee is physically fit to work;</li><li>Our clients shall be free from keeping and maintaining employment records of the contractual employee and shall likewise be spared from assuming the responsibility for payroll administration and processing of employee benefits and compensation claims from SSS, PhilHealth and Pag-Ibig.</li><li>We, as the employer, are responsible for personnel supervision over our contractual employees. Our clients need not worry about timekeeping, monitoring of personnel demeanor, dealing with violations and issuance of the corresponding sanctions.</li><li>During the assignment of our contractual employee to our clients, they are given a window to further observe his/her capabilities. Our client has the option to absorb the contractual employee at a minimal service fee equivalent to One (1) month salary that the contractual employee is receiving. However, hiring of the contractual employee on permanent basis shall be “free of charge” upon completion of his/her contract with us.</li><li>We charge very minimal administrative fee in exchange for unburdening Your Company of tedious human resource and administrative processes that you may very well opt to outsource.</li>',
	    	'job_header' => 'Applicants may submit their resumes by registering at ',
	    	'job_image' => 'asd',
	    	'job_btn' => 'VISIT PAGE',
	    	'job_link' => 'http://jobfair-online.net', 
	    ]);*/

	}

}
