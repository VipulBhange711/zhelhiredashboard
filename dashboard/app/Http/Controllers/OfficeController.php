<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Str;


class OfficeController extends Controller
{
    public function paymentSlip(Request $request)
    {

        $path = public_path() . '/images/dtrbg.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $image = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pdf = Pdf::loadView('components.dashboard.page.paymentslip', ['image' => $image]);
        return $pdf->stream('Salary.pdf');
    }
    public function InternshipLetter(Request $request)
    {

        $generateDate = Carbon::parse($request->generateDate);
        $start = Carbon::parse($request->startAt);
        $end = Carbon::parse($request->EndAt);
        $durationInMonths = $start->diffInMonths($end);

        $years = intdiv($durationInMonths, 12);
        $months = $durationInMonths % 12;

        // Format the output based on the calculated years and months
        $result = '';
        if ($years > 0) {
            $result .= $years . ' year' . ($years > 1 ? 's' : '');
        }
        if ($months > 0) {
            $result .= ($years > 0 ? ' ' : '') . $months . ' month' . ($months > 1 ? 's' : '');
        }
        $keyword = 'CS'; // Start with a fixed string 'CS'
        $keyword .= mt_rand(10, 99); // Add two random digits, e.g., '11'
        $keyword .= Str::upper(Str::random(2)); // Add two random uppercase letters, e.g., 'WX'
        $keyword .= mt_rand(10000, 99999); // Add five random digits, e.g., '156095'


        // Collecting the data
        $data = array(
            'date' => $generateDate->format('d-m-Y'),
            'id' => $keyword,
            'candidateName' => $request->candidateName,
            'profile' => $request->Profile,
            'companyName' => $request->companyName,
            'companyEmail' => $request->companyEmail,
            'companyWebsite' => $request->companyWebsite,
            'duration' => $result,
            'startAt' => $start->format('d-m-Y'),
            'endAt' =>  $end->format('d-m-Y'),
        );
        
        

        // Handling the image
        $path = public_path('/images/ZhelhireBanner.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $imageData = file_get_contents($path);
        $image = 'data:image/' . $type . ';base64,' . base64_encode($imageData);

        // Adding the image data to the array
        $data['logo'] = $image;
        $data['path'] = $path;

        // Generating the PDF
        $pdf = Pdf::loadView('components.dashboard.page.Intershiplatter', $data)
            ->setPaper('a4')
            ->setOption('isHtml5ParserEnabled', true)
            ->setOption('isRemoteEnabled', true);

        // Returning the PDF to be streamed in the browser
        return $pdf->stream('Internship_Letter.pdf');
    }
}
