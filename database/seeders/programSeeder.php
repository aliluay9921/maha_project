<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class programSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            "name" => "Visual Studio",
            "image" => "/image/image_program/1639471633.download.png",
            "details" => "Visual Studio is a software development platform developed by Microsoft for building applications and services. It is a full-featured development environment that includes a graphical user interface, a text-based user interface, and a command-line interface. It is the most widely used software development environment in the world. It is used to develop desktop applications, web applications, and mobile applications. It is also used to develop web services and web APIs.",
            "size" => "1.5 GB",
            "link" => "https://download1648.mediafire.com/ngf7s16ckleg/yoqcej4dhzmnm5b/vs2015.3.pro_enu.iso",
        ]);
        Program::create([
            "name" => "NMAP",
            "image" => "/image/image_program/1639471887.1621500006.nmap.png",
            "details" => "Nmap is a free and open-source (GPL) utility for network discovery and security auditing. It is designed to be used mainly by security professionals and system administrators, but it can also be used by anyone who wishes to explore a network to determine which hosts are up and which hosts are down.",
            "size" => "1.5 GB",
            "link" => "https://download1498.mediafire.com/k8mtaexhz17g/pi49ppuepnuazfc/nmap-7.91-setup.exe",
        ]);
        Program::create([
            "name" => "NotePad++",
            "image" => "/image/image_program/1639471933.1621500028.note.png",
            "details" => "NotePad++ is a free and open-source text editor for Windows, Linux, and Mac OS X. It is a fork of Notepad++, which was originally developed by Daniel Grana and is now maintained by its current maintainer.",
            "size" => "1GB",
            "link" => "https://download1506.mediafire.com/11nfq1im3y5g/hfxv1gxslfy8ejb/npp.7.9.5.Installer.exe",
        ]);
        Program::create([
            "name" => "EWB",
            "image" => "/image/image_program/1639472046.electronics-workbench.jpg",
            "details" => "Electronics Workbench is a free and open-source (GPL) electronic design tool for the Arduino microcontroller. It is designed to be used mainly by electronics and microcontroller developers, but it can also be used by anyone who wishes to create electronic circuits.",
            "size" => "20 MB",
            "link" => "https://download1506.mediafire.com/11nfq1im3y5g/hfxv1gxslfy8ejb/npp.7.9.5.Installer.exe",
        ]);
    }
}