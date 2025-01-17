<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                "name" => "Mumbai",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Delhi",
                "state" => "Delhi"
            ],
            [

                "name" => "Bengaluru",
                "state" => "Karnataka"
            ],
            [

                "name" => "Ahmedabad",
                "state" => "Gujarat"
            ],
            [

                "name" => "Hyderabad",
                "state" => "Telangana"
            ],
            [

                "name" => "Chennai",
                "state" => "Tamil Nadu"
            ],
            [

                "name" => "Kolkata",
                "state" => "West Bengal"
            ],
            [

                "name" => "Pune",
                "state" => "Maharashtra"
            ],
            [

                "name" => "Jaipur",
                "state" => "Rajasthan"
            ],
            [

                "name" => "Surat",
                "state" => "Gujarat"
            ],
            [
                "name" => "Lucknow",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Kanpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Nagpur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Patna",
                "state" => "Bihar"
            ],
            [
                "name" => "Indore",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Thane",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Bhopal",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Visakhapatnam",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Vadodara",
                "state" => "Gujarat"
            ],
            [
                "name" => "Firozabad",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Ludhiana",
                "state" => "Punjab"
            ],
            [
                "name" => "Rajkot",
                "state" => "Gujarat"
            ],
            [
                "name" => "Agra",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Siliguri",
                "state" => "West Bengal"
            ],
            [
                "name" => "Nashik",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Faridabad",
                "state" => "Haryana"
            ],
            [
                "name" => "Patiala",
                "state" => "Punjab"
            ],
            [
                "name" => "Meerut",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Kalyan-Dombivali",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Vasai-Virar",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Varanasi",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Srinagar",
                "state" => "Jammu and Kashmir"
            ],
            [
                "name" => "Dhanbad",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Jodhpur",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Amritsar",
                "state" => "Punjab"
            ],
            [
                "name" => "Raipur",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Allahabad",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Coimbatore",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Jabalpur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Gwalior",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Vijayawada",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Madurai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Guwahati",
                "state" => "Assam"
            ],
            [
                "name" => "Chandigarh",
                "state" => "Chandigarh"
            ],
            [
                "name" => "Hubli-Dharwad",
                "state" => "Karnataka"
            ],
            [
                "name" => "Amroha",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Moradabad",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Gurgaon",
                "state" => "Haryana"
            ],
            [
                "name" => "Aligarh",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Solapur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Ranchi",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Jalandhar",
                "state" => "Punjab"
            ],
            [
                "name" => "Tiruchirappalli",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Bhubaneswar",
                "state" => "Odisha"
            ],
            [
                "name" => "Salem",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Warangal",
                "state" => "Telangana"
            ],
            [
                "name" => "Mira-Bhayandar",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Thiruvananthapuram",
                "state" => "Kerala"
            ],
            [
                "name" => "Bhiwandi",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Saharanpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Guntur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Amravati",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Bikaner",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Noida",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Jamshedpur",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Bhilai Nagar",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Cuttack",
                "state" => "Odisha"
            ],
            [
                "name" => "Kochi",
                "state" => "Kerala"
            ],
            [
                "name" => "Udaipur",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Bhavnagar",
                "state" => "Gujarat"
            ],
            [
                "name" => "Dehradun",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Asansol",
                "state" => "West Bengal"
            ],
            [
                "name" => "Nanded-Waghala",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Ajmer",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Jamnagar",
                "state" => "Gujarat"
            ],
            [
                "name" => "Ujjain",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Sangli",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Loni",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Jhansi",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Pondicherry",
                "state" => "Puducherry"
            ],
            [
                "name" => "Nellore",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Jammu",
                "state" => "Jammu and Kashmir"
            ],
            [
                "name" => "Belagavi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Raurkela",
                "state" => "Odisha"
            ],
            [
                "name" => "Mangaluru",
                "state" => "Karnataka"
            ],
            [
                "name" => "Tirunelveli",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Malegaon",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Gaya",
                "state" => "Bihar"
            ],
            [
                "name" => "Tiruppur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Davanagere",
                "state" => "Karnataka"
            ],
            [
                "name" => "Kozhikode",
                "state" => "Kerala"
            ],
            [
                "name" => "Akola",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Kurnool",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Bokaro Steel City",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Rajahmundry",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Ballari",
                "state" => "Karnataka"
            ],
            [
                "name" => "Agartala",
                "state" => "Tripura"
            ],
            [
                "name" => "Bhagalpur",
                "state" => "Bihar"
            ],
            [
                "name" => "Latur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Dhule",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Korba",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Bhilwara",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Brahmapur",
                "state" => "Odisha"
            ],
            [
                "name" => "Mysore",
                "state" => "Karnataka"
            ],
            [
                "name" => "Muzaffarpur",
                "state" => "Bihar"
            ],
            [
                "name" => "Ahmednagar",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Kollam",
                "state" => "Kerala"
            ],
            [
                "name" => "Raghunathganj",
                "state" => "West Bengal"
            ],
            [
                "name" => "Bilaspur",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Shahjahanpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Thrissur",
                "state" => "Kerala"
            ],
            [
                "name" => "Alwar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Kakinada",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Nizamabad",
                "state" => "Telangana"
            ],
            [
                "name" => "Sagar",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Tumkur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Hisar",
                "state" => "Haryana"
            ],
            [
                "name" => "Rohtak",
                "state" => "Haryana"
            ],
            [
                "name" => "Panipat",
                "state" => "Haryana"
            ],
            [
                "name" => "Darbhanga",
                "state" => "Bihar"
            ],
            [
                "name" => "Kharagpur",
                "state" => "West Bengal"
            ],
            [
                "name" => "Aizawl",
                "state" => "Mizoram"
            ],
            [
                "name" => "Ichalkaranji",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Tirupati",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Karnal",
                "state" => "Haryana"
            ],
            [
                "name" => "Bathinda",
                "state" => "Punjab"
            ],
            [
                "name" => "Rampur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Shivamogga",
                "state" => "Karnataka"
            ],
            [
                "name" => "Ratlam",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Modinagar",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Durg",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Shillong",
                "state" => "Meghalaya"
            ],
            [
                "name" => "Imphal",
                "state" => "Manipur"
            ],
            [
                "name" => "Hapur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Ranipet",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Anantapur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Arrah",
                "state" => "Bihar"
            ],
            [
                "name" => "Karimnagar",
                "state" => "Telangana"
            ],
            [
                "name" => "Parbhani",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Etawah",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Bharatpur",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Begusarai",
                "state" => "Bihar"
            ],
            [
                "name" => "New Delhi",
                "state" => "Delhi"
            ],
            [
                "name" => "Chhapra",
                "state" => "Bihar"
            ],
            [
                "name" => "Kadapa",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Ramagundam",
                "state" => "Telangana"
            ],
            [
                "name" => "Pali",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Satna",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Vizianagaram",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Katihar",
                "state" => "Bihar"
            ],
            [
                "name" => "Hardwar",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Sonipat",
                "state" => "Haryana"
            ],
            [
                "name" => "Nagercoil",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Thanjavur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Murwara (Katni)",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Naihati",
                "state" => "West Bengal"
            ],
            [
                "name" => "Sambhal",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Nadiad",
                "state" => "Gujarat"
            ],
            [
                "name" => "Yamunanagar",
                "state" => "Haryana"
            ],
            [
                "name" => "English Bazar",
                "state" => "West Bengal"
            ],
            [
                "name" => "Eluru",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Munger",
                "state" => "Bihar"
            ],
            [
                "name" => "Panchkula",
                "state" => "Haryana"
            ],
            [
                "name" => "Raayachuru",
                "state" => "Karnataka"
            ],
            [
                "name" => "Panvel",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Deoghar",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Ongole",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Nandyal",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Morena",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Bhiwani",
                "state" => "Haryana"
            ],
            [
                "name" => "Porbandar",
                "state" => "Gujarat"
            ],
            [
                "name" => "Palakkad",
                "state" => "Kerala"
            ],
            [
                "name" => "Anand",
                "state" => "Gujarat"
            ],
            [
                "name" => "Purnia",
                "state" => "Bihar"
            ],
            [
                "name" => "Baharampur",
                "state" => "West Bengal"
            ],
            [
                "name" => "Barmer",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Morvi",
                "state" => "Gujarat"
            ],
            [
                "name" => "Orai",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Bahraich",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sikar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Vellore",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Singrauli",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Khammam",
                "state" => "Telangana"
            ],
            [
                "name" => "Mahesana",
                "state" => "Gujarat"
            ],
            [
                "name" => "Silchar",
                "state" => "Assam"
            ],
            [
                "name" => "Sambalpur",
                "state" => "Odisha"
            ],
            [
                "name" => "Rewa",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Unnao",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Hugli-Chinsurah",
                "state" => "West Bengal"
            ],
            [
                "name" => "Raiganj",
                "state" => "West Bengal"
            ],
            [
                "name" => "Phusro",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Adityapur",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Alappuzha",
                "state" => "Kerala"
            ],
            [
                "name" => "Bahadurgarh",
                "state" => "Haryana"
            ],
            [
                "name" => "Machilipatnam",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Rae Bareli",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Jalpaiguri",
                "state" => "West Bengal"
            ],
            [
                "name" => "Bharuch",
                "state" => "Gujarat"
            ],
            [
                "name" => "Pathankot",
                "state" => "Punjab"
            ],
            [
                "name" => "Hoshiarpur",
                "state" => "Punjab"
            ],
            [
                "name" => "Baramula",
                "state" => "Jammu and Kashmir"
            ],
            [
                "name" => "Adoni",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Jind",
                "state" => "Haryana"
            ],
            [
                "name" => "Tonk",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Tenali",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Kancheepuram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Vapi",
                "state" => "Gujarat"
            ],
            [
                "name" => "Sirsa",
                "state" => "Haryana"
            ],
            [
                "name" => "Navsari",
                "state" => "Gujarat"
            ],
            [
                "name" => "Mahbubnagar",
                "state" => "Telangana"
            ],
            [
                "name" => "Puri",
                "state" => "Odisha"
            ],
            [
                "name" => "Robertson Pet",
                "state" => "Karnataka"
            ],
            [
                "name" => "Erode",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Batala",
                "state" => "Punjab"
            ],
            [
                "name" => "Haldwani-cum-Kathgodam",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Vidisha",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Saharsa",
                "state" => "Bihar"
            ],
            [
                "name" => "Thanesar",
                "state" => "Haryana"
            ],
            [
                "name" => "Chittoor",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Veraval",
                "state" => "Gujarat"
            ],
            [
                "name" => "Lakhimpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sitapur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Hindupur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Santipur",
                "state" => "West Bengal"
            ],
            [
                "name" => "Balurghat",
                "state" => "West Bengal"
            ],
            [
                "name" => "Ganjbasoda",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Moga",
                "state" => "Punjab"
            ],
            [
                "name" => "Proddatur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Srinagar",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Medinipur",
                "state" => "West Bengal"
            ],
            [
                "name" => "Habra",
                "state" => "West Bengal"
            ],
            [
                "name" => "Sasaram",
                "state" => "Bihar"
            ],
            [
                "name" => "Hajipur",
                "state" => "Bihar"
            ],
            [
                "name" => "Bhuj",
                "state" => "Gujarat"
            ],
            [
                "name" => "Shivpuri",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Ranaghat",
                "state" => "West Bengal"
            ],
            [
                "name" => "Shimla",
                "state" => "Himachal Pradesh"
            ],
            [
                "name" => "Tiruvannamalai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Kaithal",
                "state" => "Haryana"
            ],
            [
                "name" => "Rajnandgaon",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Godhra",
                "state" => "Gujarat"
            ],
            [
                "name" => "Hazaribag",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Bhimavaram",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Mandsaur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Dibrugarh",
                "state" => "Assam"
            ],
            [
                "name" => "Kolar",
                "state" => "Karnataka"
            ],
            [
                "name" => "Bankura",
                "state" => "West Bengal"
            ],
            [
                "name" => "Mandya",
                "state" => "Karnataka"
            ],
            [
                "name" => "Dehri-on-Sone",
                "state" => "Bihar"
            ],
            [
                "name" => "Madanapalle",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Malerkotla",
                "state" => "Punjab"
            ],
            [
                "name" => "Lalitpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Bettiah",
                "state" => "Bihar"
            ],
            [
                "name" => "Pollachi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Khanna",
                "state" => "Punjab"
            ],
            [
                "name" => "Neemuch",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Palwal",
                "state" => "Haryana"
            ],
            [
                "name" => "Palanpur",
                "state" => "Gujarat"
            ],
            [
                "name" => "Guntakal",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Nabadwip",
                "state" => "West Bengal"
            ],
            [
                "name" => "Udupi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Jagdalpur",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Motihari",
                "state" => "Bihar"
            ],
            [
                "name" => "Pilibhit",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Dimapur",
                "state" => "Nagaland"
            ],
            [
                "name" => "Mohali",
                "state" => "Punjab"
            ],
            [
                "name" => "Sadulpur",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Rajapalayam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Dharmavaram",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Kashipur",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Sivakasi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Darjiling",
                "state" => "West Bengal"
            ],
            [
                "name" => "Chikkamagaluru",
                "state" => "Karnataka"
            ],
            [
                "name" => "Gudivada",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Baleshwar Town",
                "state" => "Odisha"
            ],
            [
                "name" => "Mancherial",
                "state" => "Telangana"
            ],
            [
                "name" => "Srikakulam",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Adilabad",
                "state" => "Telangana"
            ],
            [
                "name" => "Yavatmal",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Barnala",
                "state" => "Punjab"
            ],
            [
                "name" => "Nagaon",
                "state" => "Assam"
            ],
            [
                "name" => "Narasaraopet",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Raigarh",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Roorkee",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Valsad",
                "state" => "Gujarat"
            ],
            [
                "name" => "Ambikapur",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Giridih",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Chandausi",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Purulia",
                "state" => "West Bengal"
            ],
            [
                "name" => "Patan",
                "state" => "Gujarat"
            ],
            [
                "name" => "Bagaha",
                "state" => "Bihar"
            ],
            [
                "name" => "Hardoi ",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Achalpur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Osmanabad",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Deesa",
                "state" => "Gujarat"
            ],
            [
                "name" => "Nandurbar",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Azamgarh",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Ramgarh",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Firozpur",
                "state" => "Punjab"
            ],
            [
                "name" => "Baripada Town",
                "state" => "Odisha"
            ],
            [
                "name" => "Karwar",
                "state" => "Karnataka"
            ],
            [
                "name" => "Siwan",
                "state" => "Bihar"
            ],
            [
                "name" => "Rajampet",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Pudukkottai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Anantnag",
                "state" => "Jammu and Kashmir"
            ],
            [
                "name" => "Tadpatri",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Satara",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Bhadrak",
                "state" => "Odisha"
            ],
            [
                "name" => "Kishanganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Suryapet",
                "state" => "Telangana"
            ],
            [
                "name" => "Wardha",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Ranebennuru",
                "state" => "Karnataka"
            ],
            [
                "name" => "Amreli",
                "state" => "Gujarat"
            ],
            [
                "name" => "Neyveli (TS)",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Jamalpur",
                "state" => "Bihar"
            ],
            [
                "name" => "Marmagao",
                "state" => "Goa"
            ],
            [
                "name" => "Udgir",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Tadepalligudem",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Nagapattinam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Buxar",
                "state" => "Bihar"
            ],
            [
                "name" => "Aurangabad",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Jehanabad",
                "state" => "Bihar"
            ],
            [
                "name" => "Phagwara",
                "state" => "Punjab"
            ],
            [
                "name" => "Khair",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sawai Madhopur",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Kapurthala",
                "state" => "Punjab"
            ],
            [
                "name" => "Chilakaluripet",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Aurangabad",
                "state" => "Bihar"
            ],
            [
                "name" => "Malappuram",
                "state" => "Kerala"
            ],
            [
                "name" => "Rewari",
                "state" => "Haryana"
            ],
            [
                "name" => "Nagaur",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Sultanpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Nagda",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Port Blair",
                "state" => "Andaman and Nicobar Islands"
            ],
            [
                "name" => "Lakhisarai",
                "state" => "Bihar"
            ],
            [
                "name" => "Panaji",
                "state" => "Goa"
            ],
            [
                "name" => "Tinsukia",
                "state" => "Assam"
            ],
            [
                "name" => "Itarsi",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Kohima",
                "state" => "Nagaland"
            ],
            [
                "name" => "Balangir",
                "state" => "Odisha"
            ],
            [
                "name" => "Nawada",
                "state" => "Bihar"
            ],
            [
                "name" => "Jharsuguda",
                "state" => "Odisha"
            ],
            [
                "name" => "Jagtial",
                "state" => "Telangana"
            ],
            [
                "name" => "Viluppuram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Amalner",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Zirakpur",
                "state" => "Punjab"
            ],
            [
                "name" => "Tanda",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Tiruchengode",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Nagina",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Yemmiganur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Vaniyambadi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Sarni",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Theni Allinagaram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Margao",
                "state" => "Goa"
            ],
            [
                "name" => "Akot",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sehore",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Mhow Cantonment",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Kot Kapura",
                "state" => "Punjab"
            ],
            [
                "name" => "Makrana",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Pandharpur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Miryalaguda",
                "state" => "Telangana"
            ],
            [
                "name" => "Shamli",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Seoni",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Ranibennur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Kadiri",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Shrirampur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Rudrapur",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Parli",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Najibabad",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Nirmal",
                "state" => "Telangana"
            ],
            [
                "name" => "Udhagamandalam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Shikohabad",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Jhumri Tilaiya",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Aruppukkottai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Ponnani",
                "state" => "Kerala"
            ],
            [
                "name" => "Jamui",
                "state" => "Bihar"
            ],
            [
                "name" => "Sitamarhi",
                "state" => "Bihar"
            ],
            [
                "name" => "Chirala",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Anjar",
                "state" => "Gujarat"
            ],
            [
                "name" => "Karaikal",
                "state" => "Puducherry"
            ],
            [
                "name" => "Hansi",
                "state" => "Haryana"
            ],
            [
                "name" => "Anakapalle",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Mahasamund",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Faridkot",
                "state" => "Punjab"
            ],
            [
                "name" => "Saunda",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Dhoraji",
                "state" => "Gujarat"
            ],
            [
                "name" => "Paramakudi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Balaghat",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Sujangarh",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Khambhat",
                "state" => "Gujarat"
            ],
            [
                "name" => "Muktsar",
                "state" => "Punjab"
            ],
            [
                "name" => "Rajpura",
                "state" => "Punjab"
            ],
            [
                "name" => "Kavali",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Dhamtari",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Ashok Nagar",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Sardarshahar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Mahuva",
                "state" => "Gujarat"
            ],
            [
                "name" => "Bargarh",
                "state" => "Odisha"
            ],
            [
                "name" => "Kamareddy",
                "state" => "Telangana"
            ],
            [
                "name" => "Sahibganj",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Kothagudem",
                "state" => "Telangana"
            ],
            [
                "name" => "Ramanagaram",
                "state" => "Karnataka"
            ],
            [
                "name" => "Gokak",
                "state" => "Karnataka"
            ],
            [
                "name" => "Tikamgarh",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Araria",
                "state" => "Bihar"
            ],
            [
                "name" => "Rishikesh",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Shahdol",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Medininagar (Daltonganj)",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Arakkonam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Washim",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sangrur",
                "state" => "Punjab"
            ],
            [
                "name" => "Bodhan",
                "state" => "Telangana"
            ],
            [
                "name" => "Fazilka",
                "state" => "Punjab"
            ],
            [
                "name" => "Palacole",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Keshod",
                "state" => "Gujarat"
            ],
            [
                "name" => "Sullurpeta",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Wadhwan",
                "state" => "Gujarat"
            ],
            [
                "name" => "Gurdaspur",
                "state" => "Punjab"
            ],
            [
                "name" => "Vatakara",
                "state" => "Kerala"
            ],
            [
                "name" => "Tura",
                "state" => "Meghalaya"
            ],
            [
                "name" => "Narnaul",
                "state" => "Haryana"
            ],
            [
                "name" => "Kharar",
                "state" => "Punjab"
            ],
            [
                "name" => "Yadgir",
                "state" => "Karnataka"
            ],
            [
                "name" => "Ambejogai",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Ankleshwar",
                "state" => "Gujarat"
            ],
            [
                "name" => "Savarkundla",
                "state" => "Gujarat"
            ],
            [
                "name" => "Paradip",
                "state" => "Odisha"
            ],
            [
                "name" => "Virudhachalam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Kanhangad",
                "state" => "Kerala"
            ],
            [
                "name" => "Kadi",
                "state" => "Gujarat"
            ],
            [
                "name" => "Srivilliputhur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Gobindgarh",
                "state" => "Punjab"
            ],
            [
                "name" => "Tindivanam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Mansa",
                "state" => "Punjab"
            ],
            [
                "name" => "Taliparamba",
                "state" => "Kerala"
            ],
            [
                "name" => "Manmad",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Tanuku",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Rayachoti",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Virudhunagar",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Koyilandy",
                "state" => "Kerala"
            ],
            [
                "name" => "Jorhat",
                "state" => "Assam"
            ],
            [
                "name" => "Karur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Valparai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Srikalahasti",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Neyyattinkara",
                "state" => "Kerala"
            ],
            [
                "name" => "Bapatla",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Fatehabad",
                "state" => "Haryana"
            ],
            [
                "name" => "Malout",
                "state" => "Punjab"
            ],
            [
                "name" => "Sankarankovil",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Tenkasi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Ratnagiri",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Rabkavi Banhatti",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sikandrabad",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Chaibasa",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Chirmiri",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Palwancha",
                "state" => "Telangana"
            ],
            [
                "name" => "Bhawanipatna",
                "state" => "Odisha"
            ],
            [
                "name" => "Kayamkulam",
                "state" => "Kerala"
            ],
            [
                "name" => "Pithampur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Nabha",
                "state" => "Punjab"
            ],
            [
                "name" => "Shahabad, Hardoi",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Dhenkanal",
                "state" => "Odisha"
            ],
            [
                "name" => "Uran Islampur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Gopalganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Bongaigaon City",
                "state" => "Assam"
            ],
            [
                "name" => "Palani",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Pusad",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sopore",
                "state" => "Jammu and Kashmir"
            ],
            [
                "name" => "Pilkhuwa",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Tarn Taran",
                "state" => "Punjab"
            ],
            [
                "name" => "Renukoot",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Mandamarri",
                "state" => "Telangana"
            ],
            [
                "name" => "Shahabad",
                "state" => "Karnataka"
            ],
            [
                "name" => "Barbil",
                "state" => "Odisha"
            ],
            [
                "name" => "Koratla",
                "state" => "Telangana"
            ],
            [
                "name" => "Madhubani",
                "state" => "Bihar"
            ],
            [
                "name" => "Arambagh",
                "state" => "West Bengal"
            ],
            [
                "name" => "Gohana",
                "state" => "Haryana"
            ],
            [
                "name" => "Ladnu",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Pattukkottai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Sirsi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sircilla",
                "state" => "Telangana"
            ],
            [
                "name" => "Tamluk",
                "state" => "West Bengal"
            ],
            [
                "name" => "Jagraon",
                "state" => "Punjab"
            ],
            [
                "name" => "AlipurdUrban Agglomerationr",
                "state" => "West Bengal"
            ],
            [
                "name" => "Alirajpur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Tandur",
                "state" => "Telangana"
            ],
            [
                "name" => "Naidupet",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Tirupathur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Tohana",
                "state" => "Haryana"
            ],
            [
                "name" => "Ratangarh",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Dhubri",
                "state" => "Assam"
            ],
            [
                "name" => "Masaurhi",
                "state" => "Bihar"
            ],
            [
                "name" => "Visnagar",
                "state" => "Gujarat"
            ],
            [
                "name" => "Vrindavan",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Nokha",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Nagari",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Narwana",
                "state" => "Haryana"
            ],
            [
                "name" => "Ramanathapuram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Ujhani",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Samastipur",
                "state" => "Bihar"
            ],
            [
                "name" => "Laharpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sangamner",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Nimbahera",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Siddipet",
                "state" => "Telangana"
            ],
            [
                "name" => "Suri",
                "state" => "West Bengal"
            ],
            [
                "name" => "Diphu",
                "state" => "Assam"
            ],
            [
                "name" => "Jhargram",
                "state" => "West Bengal"
            ],
            [
                "name" => "Shirpur-Warwade",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Tilhar",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sindhnur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Udumalaipettai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Malkapur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Wanaparthy",
                "state" => "Telangana"
            ],
            [
                "name" => "Gudur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Kendujhar",
                "state" => "Odisha"
            ],
            [
                "name" => "Mandla",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Mandi",
                "state" => "Himachal Pradesh"
            ],
            [
                "name" => "Nedumangad",
                "state" => "Kerala"
            ],
            [
                "name" => "North Lakhimpur",
                "state" => "Assam"
            ],
            [
                "name" => "Vinukonda",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Tiptur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Gobichettipalayam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Sunabeda",
                "state" => "Odisha"
            ],
            [
                "name" => "Wani",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Upleta",
                "state" => "Gujarat"
            ],
            [
                "name" => "Narasapuram",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Nuzvid",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Tezpur",
                "state" => "Assam"
            ],
            [
                "name" => "Una",
                "state" => "Gujarat"
            ],
            [
                "name" => "Markapur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Sheopur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Thiruvarur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Sidhpur",
                "state" => "Gujarat"
            ],
            [
                "name" => "Sahaswan",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Suratgarh",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Shajapur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Rayagada",
                "state" => "Odisha"
            ],
            [
                "name" => "Lonavla",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Ponnur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Kagaznagar",
                "state" => "Telangana"
            ],
            [
                "name" => "Gadwal",
                "state" => "Telangana"
            ],
            [
                "name" => "Bhatapara",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Kandukur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Sangareddy",
                "state" => "Telangana"
            ],
            [
                "name" => "Unjha",
                "state" => "Gujarat"
            ],
            [
                "name" => "Lunglei",
                "state" => "Mizoram"
            ],
            [
                "name" => "Karimganj",
                "state" => "Assam"
            ],
            [
                "name" => "Kannur",
                "state" => "Kerala"
            ],
            [
                "name" => "Bobbili",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Mokameh",
                "state" => "Bihar"
            ],
            [
                "name" => "Talegaon Dabhade",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Anjangaon",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Mangrol",
                "state" => "Gujarat"
            ],
            [
                "name" => "Sunam",
                "state" => "Punjab"
            ],
            [
                "name" => "Gangarampur",
                "state" => "West Bengal"
            ],
            [
                "name" => "Thiruvallur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Tirur",
                "state" => "Kerala"
            ],
            [
                "name" => "Rath",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Jatani",
                "state" => "Odisha"
            ],
            [
                "name" => "Viramgam",
                "state" => "Gujarat"
            ],
            [
                "name" => "Rajsamand",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Yanam",
                "state" => "Puducherry"
            ],
            [
                "name" => "Kottayam",
                "state" => "Kerala"
            ],
            [
                "name" => "Panruti",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Dhuri",
                "state" => "Punjab"
            ],
            [
                "name" => "Namakkal",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Kasaragod",
                "state" => "Kerala"
            ],
            [
                "name" => "Modasa",
                "state" => "Gujarat"
            ],
            [
                "name" => "Rayadurg",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Supaul",
                "state" => "Bihar"
            ],
            [
                "name" => "Kunnamkulam",
                "state" => "Kerala"
            ],
            [
                "name" => "Umred",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Bellampalle",
                "state" => "Telangana"
            ],
            [
                "name" => "Sibsagar",
                "state" => "Assam"
            ],
            [
                "name" => "Mandi Dabwali",
                "state" => "Haryana"
            ],
            [
                "name" => "Ottappalam",
                "state" => "Kerala"
            ],
            [
                "name" => "Dumraon",
                "state" => "Bihar"
            ],
            [
                "name" => "Samalkot",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Jaggaiahpet",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Goalpara",
                "state" => "Assam"
            ],
            [
                "name" => "Tuni",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Lachhmangarh",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Bhongir",
                "state" => "Telangana"
            ],
            [
                "name" => "Amalapuram",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Firozpur Cantt.",
                "state" => "Punjab"
            ],
            [
                "name" => "Vikarabad",
                "state" => "Telangana"
            ],
            [
                "name" => "Thiruvalla",
                "state" => "Kerala"
            ],
            [
                "name" => "Sherkot",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Palghar",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Shegaon",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Jangaon",
                "state" => "Telangana"
            ],
            [
                "name" => "Bheemunipatnam",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Panna",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Thodupuzha",
                "state" => "Kerala"
            ],
            [
                "name" => "KathUrban Agglomeration",
                "state" => "Jammu and Kashmir"
            ],
            [
                "name" => "Palitana",
                "state" => "Gujarat"
            ],
            [
                "name" => "Arwal",
                "state" => "Bihar"
            ],
            [
                "name" => "Venkatagiri",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Kalpi",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Rajgarh (Churu)",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Sattenapalle",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Arsikere",
                "state" => "Karnataka"
            ],
            [
                "name" => "Ozar",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Thirumangalam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Petlad",
                "state" => "Gujarat"
            ],
            [
                "name" => "Nasirabad",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Phaltan",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Rampurhat",
                "state" => "West Bengal"
            ],
            [
                "name" => "Nanjangud",
                "state" => "Karnataka"
            ],
            [
                "name" => "Forbesganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Tundla",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "BhabUrban Agglomeration",
                "state" => "Bihar"
            ],
            [
                "name" => "Sagara",
                "state" => "Karnataka"
            ],
            [
                "name" => "Pithapuram",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Sira",
                "state" => "Karnataka"
            ],
            [
                "name" => "Bhadrachalam",
                "state" => "Telangana"
            ],
            [
                "name" => "Charkhi Dadri",
                "state" => "Haryana"
            ],
            [
                "name" => "Chatra",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Palasa Kasibugga",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Nohar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Yevla",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sirhind Fatehgarh Sahib",
                "state" => "Punjab"
            ],
            [
                "name" => "Bhainsa",
                "state" => "Telangana"
            ],
            [
                "name" => "Parvathipuram",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Shahade",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Chalakudy",
                "state" => "Kerala"
            ],
            [
                "name" => "Narkatiaganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Kapadvanj",
                "state" => "Gujarat"
            ],
            [
                "name" => "Macherla",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Raghogarh-Vijaypur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Rupnagar",
                "state" => "Punjab"
            ],
            [
                "name" => "Naugachhia",
                "state" => "Bihar"
            ],
            [
                "name" => "Sendhwa",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Byasanagar",
                "state" => "Odisha"
            ],
            [
                "name" => "Sandila",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Gooty",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Salur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Nanpara",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sardhana",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Vita",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Gumia",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Puttur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Jalandhar Cantt.",
                "state" => "Punjab"
            ],
            [
                "name" => "Nehtaur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Changanassery",
                "state" => "Kerala"
            ],
            [
                "name" => "Mandapeta",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Dumka",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Seohara",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Umarkhed",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Madhupur",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Vikramasingapuram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Punalur",
                "state" => "Kerala"
            ],
            [
                "name" => "Kendrapara",
                "state" => "Odisha"
            ],
            [
                "name" => "Sihor",
                "state" => "Gujarat"
            ],
            [
                "name" => "Nellikuppam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Samana",
                "state" => "Punjab"
            ],
            [
                "name" => "Warora",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Nilambur",
                "state" => "Kerala"
            ],
            [
                "name" => "Rasipuram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Ramnagar",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Jammalamadugu",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Nawanshahr",
                "state" => "Punjab"
            ],
            [
                "name" => "Thoubal",
                "state" => "Manipur"
            ],
            [
                "name" => "Athni",
                "state" => "Karnataka"
            ],
            [
                "name" => "Cherthala",
                "state" => "Kerala"
            ],
            [
                "name" => "Sidhi",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Farooqnagar",
                "state" => "Telangana"
            ],
            [
                "name" => "Peddapuram",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Chirkunda",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Pachora",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Madhepura",
                "state" => "Bihar"
            ],
            [
                "name" => "Pithoragarh",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Tumsar",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Phalodi",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Tiruttani",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Rampura Phul",
                "state" => "Punjab"
            ],
            [
                "name" => "Perinthalmanna",
                "state" => "Kerala"
            ],
            [
                "name" => "Padrauna",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Pipariya",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Dalli-Rajhara",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Punganur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Mattannur",
                "state" => "Kerala"
            ],
            [
                "name" => "Mathura",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Thakurdwara",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Nandivaram-Guduvancheri",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Mulbagal",
                "state" => "Karnataka"
            ],
            [
                "name" => "Manjlegaon",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Wankaner",
                "state" => "Gujarat"
            ],
            [
                "name" => "Sillod",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Nidadavole",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Surapura",
                "state" => "Karnataka"
            ],
            [
                "name" => "Rajagangapur",
                "state" => "Odisha"
            ],
            [
                "name" => "Sheikhpura",
                "state" => "Bihar"
            ],
            [
                "name" => "Parlakhemundi",
                "state" => "Odisha"
            ],
            [
                "name" => "Kalimpong",
                "state" => "West Bengal"
            ],
            [
                "name" => "Siruguppa",
                "state" => "Karnataka"
            ],
            [
                "name" => "Arvi",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Limbdi",
                "state" => "Gujarat"
            ],
            [
                "name" => "Barpeta",
                "state" => "Assam"
            ],
            [
                "name" => "Manglaur",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Repalle",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Mudhol",
                "state" => "Karnataka"
            ],
            [
                "name" => "Shujalpur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Mandvi",
                "state" => "Gujarat"
            ],
            [
                "name" => "Thangadh",
                "state" => "Gujarat"
            ],
            [
                "name" => "Sironj",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Nandura",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Shoranur",
                "state" => "Kerala"
            ],
            [
                "name" => "Nathdwara",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Periyakulam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Sultanganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Medak",
                "state" => "Telangana"
            ],
            [
                "name" => "Narayanpet",
                "state" => "Telangana"
            ],
            [
                "name" => "Raxaul Bazar",
                "state" => "Bihar"
            ],
            [
                "name" => "Rajauri",
                "state" => "Jammu and Kashmir"
            ],
            [
                "name" => "Pernampattu",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Nainital",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Ramachandrapuram",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Vaijapur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Nangal",
                "state" => "Punjab"
            ],
            [
                "name" => "Sidlaghatta",
                "state" => "Karnataka"
            ],
            [
                "name" => "Punch",
                "state" => "Jammu and Kashmir"
            ],
            [
                "name" => "Pandhurna",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Wadgaon Road",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Talcher",
                "state" => "Odisha"
            ],
            [
                "name" => "Varkala",
                "state" => "Kerala"
            ],
            [
                "name" => "Pilani",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Nowgong",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Naila Janjgir",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Mapusa",
                "state" => "Goa"
            ],
            [
                "name" => "Vellakoil",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Merta City",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Sivaganga",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Mandideep",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Sailu",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Vyara",
                "state" => "Gujarat"
            ],
            [
                "name" => "Kovvur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Vadalur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Nawabganj",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Padra",
                "state" => "Gujarat"
            ],
            [
                "name" => "Sainthia",
                "state" => "West Bengal"
            ],
            [
                "name" => "Siana",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Shahpur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sojat",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Noorpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Paravoor",
                "state" => "Kerala"
            ],
            [
                "name" => "Murtijapur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Ramnagar",
                "state" => "Bihar"
            ],
            [
                "name" => "Sundargarh",
                "state" => "Odisha"
            ],
            [
                "name" => "Taki",
                "state" => "West Bengal"
            ],
            [
                "name" => "Saundatti-Yellamma",
                "state" => "Karnataka"
            ],
            [
                "name" => "Pathanamthitta",
                "state" => "Kerala"
            ],
            [
                "name" => "Wadi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Rameshwaram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Tasgaon",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sikandra Rao",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sihora",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Tiruvethipuram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Tiruvuru",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Mehkar",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Peringathur",
                "state" => "Kerala"
            ],
            [
                "name" => "Perambalur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Manvi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Zunheboto",
                "state" => "Nagaland"
            ],
            [
                "name" => "Mahnar Bazar",
                "state" => "Bihar"
            ],
            [
                "name" => "Attingal",
                "state" => "Kerala"
            ],
            [
                "name" => "Shahbad",
                "state" => "Haryana"
            ],
            [
                "name" => "Puranpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Nelamangala",
                "state" => "Karnataka"
            ],
            [
                "name" => "Nakodar",
                "state" => "Punjab"
            ],
            [
                "name" => "Lunawada",
                "state" => "Gujarat"
            ],
            [
                "name" => "Murshidabad",
                "state" => "West Bengal"
            ],
            [
                "name" => "Mahe",
                "state" => "Puducherry"
            ],
            [
                "name" => "Lanka",
                "state" => "Assam"
            ],
            [
                "name" => "Rudauli",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Tuensang",
                "state" => "Nagaland"
            ],
            [
                "name" => "Lakshmeshwar",
                "state" => "Karnataka"
            ],
            [
                "name" => "Zira",
                "state" => "Punjab"
            ],
            [
                "name" => "Yawal",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Thana Bhawan",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Ramdurg",
                "state" => "Karnataka"
            ],
            [
                "name" => "Pulgaon",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sadasivpet",
                "state" => "Telangana"
            ],
            [
                "name" => "Nargund",
                "state" => "Karnataka"
            ],
            [
                "name" => "Neem-Ka-Thana",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Memari",
                "state" => "West Bengal"
            ],
            [
                "name" => "Nilanga",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Naharlagun",
                "state" => "Arunachal Pradesh"
            ],
            [
                "name" => "Pakaur",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Wai",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Tarikere",
                "state" => "Karnataka"
            ],
            [
                "name" => "Malavalli",
                "state" => "Karnataka"
            ],
            [
                "name" => "Raisen",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Lahar",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Uravakonda",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Savanur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sirohi",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Udhampur",
                "state" => "Jammu and Kashmir"
            ],
            [
                "name" => "Umarga",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Pratapgarh",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Lingsugur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Usilampatti",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Palia Kalan",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Wokha",
                "state" => "Nagaland"
            ],
            [
                "name" => "Rajpipla",
                "state" => "Gujarat"
            ],
            [
                "name" => "Vijayapura",
                "state" => "Karnataka"
            ],
            [
                "name" => "Rawatbhata",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Sangaria",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Paithan",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Rahuri",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Patti",
                "state" => "Punjab"
            ],
            [
                "name" => "Zaidpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Lalsot",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Maihar",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Vedaranyam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Nawapur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Solan",
                "state" => "Himachal Pradesh"
            ],
            [
                "name" => "Vapi",
                "state" => "Gujarat"
            ],
            [
                "name" => "Sanawad",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Warisaliganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Revelganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Sabalgarh",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Tuljapur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Simdega",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Musabani",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Kodungallur",
                "state" => "Kerala"
            ],
            [
                "name" => "Phulabani",
                "state" => "Odisha"
            ],
            [
                "name" => "Umreth",
                "state" => "Gujarat"
            ],
            [
                "name" => "Narsipatnam",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Nautanwa",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Rajgir",
                "state" => "Bihar"
            ],
            [
                "name" => "Yellandu",
                "state" => "Telangana"
            ],
            [
                "name" => "Sathyamangalam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Pilibanga",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Morshi",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Pehowa",
                "state" => "Haryana"
            ],
            [
                "name" => "Sonepur",
                "state" => "Bihar"
            ],
            [
                "name" => "Pappinisseri",
                "state" => "Kerala"
            ],
            [
                "name" => "Zamania",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Mihijam",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Purna",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Puliyankudi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Shikarpur, Bulandshahr",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Umaria",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Porsa",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Naugawan Sadat",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Fatehpur Sikri",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Manuguru",
                "state" => "Telangana"
            ],
            [
                "name" => "Udaipur",
                "state" => "Tripura"
            ],
            [
                "name" => "Pipar City",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Pattamundai",
                "state" => "Odisha"
            ],
            [
                "name" => "Nanjikottai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Taranagar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Yerraguntla",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Satana",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sherghati",
                "state" => "Bihar"
            ],
            [
                "name" => "Sankeshwara",
                "state" => "Karnataka"
            ],
            [
                "name" => "Madikeri",
                "state" => "Karnataka"
            ],
            [
                "name" => "Thuraiyur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Sanand",
                "state" => "Gujarat"
            ],
            [
                "name" => "Rajula",
                "state" => "Gujarat"
            ],
            [
                "name" => "Kyathampalle",
                "state" => "Telangana"
            ],
            [
                "name" => "Shahabad, Rampur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Tilda Newra",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Narsinghgarh",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Chittur-Thathamangalam",
                "state" => "Kerala"
            ],
            [
                "name" => "Malaj Khand",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Sarangpur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Robertsganj",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sirkali",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Radhanpur",
                "state" => "Gujarat"
            ],
            [
                "name" => "Tiruchendur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Utraula",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Patratu",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Vijainagar, Ajmer",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Periyasemur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Pathri",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sadabad",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Talikota",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sinnar",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Mungeli",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Sedam",
                "state" => "Karnataka"
            ],
            [
                "name" => "Shikaripur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sumerpur",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Sattur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Sugauli",
                "state" => "Bihar"
            ],
            [
                "name" => "Lumding",
                "state" => "Assam"
            ],
            [
                "name" => "Vandavasi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Titlagarh",
                "state" => "Odisha"
            ],
            [
                "name" => "Uchgaon",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Mokokchung",
                "state" => "Nagaland"
            ],
            [
                "name" => "Paschim Punropara",
                "state" => "West Bengal"
            ],
            [
                "name" => "Sagwara",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Ramganj Mandi",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Tarakeswar",
                "state" => "West Bengal"
            ],
            [
                "name" => "Mahalingapura",
                "state" => "Karnataka"
            ],
            [
                "name" => "Dharmanagar",
                "state" => "Tripura"
            ],
            [
                "name" => "Mahemdabad",
                "state" => "Gujarat"
            ],
            [
                "name" => "Manendragarh",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Uran",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Tharamangalam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Tirukkoyilur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Pen",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Makhdumpur",
                "state" => "Bihar"
            ],
            [
                "name" => "Maner",
                "state" => "Bihar"
            ],
            [
                "name" => "Oddanchatram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Palladam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Mundi",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Nabarangapur",
                "state" => "Odisha"
            ],
            [
                "name" => "Mudalagi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Samalkha",
                "state" => "Haryana"
            ],
            [
                "name" => "Nepanagar",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Karjat",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Ranavav",
                "state" => "Gujarat"
            ],
            [
                "name" => "Pedana",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Pinjore",
                "state" => "Haryana"
            ],
            [
                "name" => "Lakheri",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Pasan",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Puttur",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Vadakkuvalliyur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Tirukalukundram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Mahidpur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Mussoorie",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Muvattupuzha",
                "state" => "Kerala"
            ],
            [
                "name" => "Rasra",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Udaipurwati",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Manwath",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Adoor",
                "state" => "Kerala"
            ],
            [
                "name" => "Uthamapalayam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Partur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Nahan",
                "state" => "Himachal Pradesh"
            ],
            [
                "name" => "Ladwa",
                "state" => "Haryana"
            ],
            [
                "name" => "Mankachar",
                "state" => "Assam"
            ],
            [
                "name" => "Nongstoin",
                "state" => "Meghalaya"
            ],
            [
                "name" => "Losal",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Sri Madhopur",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Ramngarh",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Mavelikkara",
                "state" => "Kerala"
            ],
            [
                "name" => "Rawatsar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Rajakhera",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Lar",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Lal Gopalganj Nindaura",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Muddebihal",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sirsaganj",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Shahpura",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Surandai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Sangole",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Pavagada",
                "state" => "Karnataka"
            ],
            [
                "name" => "Tharad",
                "state" => "Gujarat"
            ],
            [
                "name" => "Mansa",
                "state" => "Gujarat"
            ],
            [
                "name" => "Umbergaon",
                "state" => "Gujarat"
            ],
            [
                "name" => "Mavoor",
                "state" => "Kerala"
            ],
            [
                "name" => "Nalbari",
                "state" => "Assam"
            ],
            [
                "name" => "Talaja",
                "state" => "Gujarat"
            ],
            [
                "name" => "Malur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Mangrulpir",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Soro",
                "state" => "Odisha"
            ],
            [
                "name" => "Shahpura",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Vadnagar",
                "state" => "Gujarat"
            ],
            [
                "name" => "Raisinghnagar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Sindhagi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sanduru",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sohna",
                "state" => "Haryana"
            ],
            [
                "name" => "Manavadar",
                "state" => "Gujarat"
            ],
            [
                "name" => "Pihani",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Safidon",
                "state" => "Haryana"
            ],
            [
                "name" => "Risod",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Rosera",
                "state" => "Bihar"
            ],
            [
                "name" => "Sankari",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Malpura",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Sonamukhi",
                "state" => "West Bengal"
            ],
            [
                "name" => "Shamsabad, Agra",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Nokha",
                "state" => "Bihar"
            ],
            [
                "name" => "PandUrban Agglomeration",
                "state" => "West Bengal"
            ],
            [
                "name" => "Mainaguri",
                "state" => "West Bengal"
            ],
            [
                "name" => "Afzalpur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Shirur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Salaya",
                "state" => "Gujarat"
            ],
            [
                "name" => "Shenkottai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Pratapgarh",
                "state" => "Tripura"
            ],
            [
                "name" => "Vadipatti",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Nagarkurnool",
                "state" => "Telangana"
            ],
            [
                "name" => "Savner",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sasvad",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Rudrapur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Soron",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sholingur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Pandharkaoda",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Perumbavoor",
                "state" => "Kerala"
            ],
            [
                "name" => "Maddur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Nadbai",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Talode",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Shrigonda",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Madhugiri",
                "state" => "Karnataka"
            ],
            [
                "name" => "Tekkalakote",
                "state" => "Karnataka"
            ],
            [
                "name" => "Seoni-Malwa",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Shirdi",
                "state" => "Maharashtra"
            ],
            [
                "name" => "SUrban Agglomerationr",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Terdal",
                "state" => "Karnataka"
            ],
            [
                "name" => "Raver",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Tirupathur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Taraori",
                "state" => "Haryana"
            ],
            [
                "name" => "Mukhed",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Manachanallur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Rehli",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Sanchore",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Rajura",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Piro",
                "state" => "Bihar"
            ],
            [
                "name" => "Mudabidri",
                "state" => "Karnataka"
            ],
            [
                "name" => "Vadgaon Kasba",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Nagar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Vijapur",
                "state" => "Gujarat"
            ],
            [
                "name" => "Viswanatham",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Polur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Panagudi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Manawar",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Tehri",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Samdhan",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Pardi",
                "state" => "Gujarat"
            ],
            [
                "name" => "Rahatgarh",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Panagar",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Uthiramerur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Tirora",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Rangia",
                "state" => "Assam"
            ],
            [
                "name" => "Sahjanwa",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Wara Seoni",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Magadi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Rajgarh (Alwar)",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Rafiganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Tarana",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Rampur Maniharan",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sheoganj",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Raikot",
                "state" => "Punjab"
            ],
            [
                "name" => "Pauri",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Sumerpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Navalgund",
                "state" => "Karnataka"
            ],
            [
                "name" => "Shahganj",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Marhaura",
                "state" => "Bihar"
            ],
            [
                "name" => "Tulsipur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sadri",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Thiruthuraipoondi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Shiggaon",
                "state" => "Karnataka"
            ],
            [
                "name" => "Pallapatti",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Mahendragarh",
                "state" => "Haryana"
            ],
            [
                "name" => "Sausar",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Ponneri",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Mahad",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Lohardaga",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Tirwaganj",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Margherita",
                "state" => "Assam"
            ],
            [
                "name" => "Sundarnagar",
                "state" => "Himachal Pradesh"
            ],
            [
                "name" => "Rajgarh",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Mangaldoi",
                "state" => "Assam"
            ],
            [
                "name" => "Renigunta",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Longowal",
                "state" => "Punjab"
            ],
            [
                "name" => "Ratia",
                "state" => "Haryana"
            ],
            [
                "name" => "Lalgudi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Shrirangapattana",
                "state" => "Karnataka"
            ],
            [
                "name" => "Niwari",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Natham",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Unnamalaikadai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "PurqUrban Agglomerationzi",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Shamsabad, Farrukhabad",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Mirganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Todaraisingh",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Warhapur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Rajam",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Urmar Tanda",
                "state" => "Punjab"
            ],
            [
                "name" => "Lonar",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Powayan",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "P.N.Patti",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Palampur",
                "state" => "Himachal Pradesh"
            ],
            [
                "name" => "Srisailam Project (Right Flank Colony) Township",
                "state" => "Andhra Pradesh"
            ],
            [
                "name" => "Sindagi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sandi",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Vaikom",
                "state" => "Kerala"
            ],
            [
                "name" => "Malda",
                "state" => "West Bengal"
            ],
            [
                "name" => "Tharangambadi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Sakaleshapura",
                "state" => "Karnataka"
            ],
            [
                "name" => "Lalganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Malkangiri",
                "state" => "Odisha"
            ],
            [
                "name" => "Rapar",
                "state" => "Gujarat"
            ],
            [
                "name" => "Mauganj",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Todabhim",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Srinivaspur",
                "state" => "Karnataka"
            ],
            [
                "name" => "Murliganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Reengus",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Sawantwadi",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Tittakudi",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Lilong",
                "state" => "Manipur"
            ],
            [
                "name" => "Rajaldesar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Pathardi",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Achhnera",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Pacode",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Naraura",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Nakur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Palai",
                "state" => "Kerala"
            ],
            [
                "name" => "Morinda, India",
                "state" => "Punjab"
            ],
            [
                "name" => "Manasa",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Nainpur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Sahaspur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Pauni",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Prithvipur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Ramtek",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Silapathar",
                "state" => "Assam"
            ],
            [
                "name" => "Songadh",
                "state" => "Gujarat"
            ],
            [
                "name" => "Safipur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sohagpur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Mul",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sadulshahar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Phillaur",
                "state" => "Punjab"
            ],
            [
                "name" => "Sambhar",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Prantij",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Nagla",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Pattran",
                "state" => "Punjab"
            ],
            [
                "name" => "Mount Abu",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Reoti",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Tenu dam-cum-Kathhara",
                "state" => "Jharkhand"
            ],
            [
                "name" => "Panchla",
                "state" => "West Bengal"
            ],
            [
                "name" => "Sitarganj",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Pasighat",
                "state" => "Arunachal Pradesh"
            ],
            [
                "name" => "Motipur",
                "state" => "Bihar"
            ],
            [
                "name" => "O' Valley",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Raghunathpur",
                "state" => "West Bengal"
            ],
            [
                "name" => "Suriyampalayam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Qadian",
                "state" => "Punjab"
            ],
            [
                "name" => "Rairangpur",
                "state" => "Odisha"
            ],
            [
                "name" => "Silvassa",
                "state" => "Dadra and Nagar Haveli"
            ],
            [
                "name" => "Nowrozabad (Khodargama)",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Mangrol",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Soyagaon",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sujanpur",
                "state" => "Punjab"
            ],
            [
                "name" => "Manihari",
                "state" => "Bihar"
            ],
            [
                "name" => "Sikanderpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Mangalvedhe",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Phulera",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Ron",
                "state" => "Karnataka"
            ],
            [
                "name" => "Sholavandan",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Saidpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Shamgarh",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Thammampatti",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Maharajpur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Multai",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Mukerian",
                "state" => "Punjab"
            ],
            [
                "name" => "Sirsi",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Purwa",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sheohar",
                "state" => "Bihar"
            ],
            [
                "name" => "Namagiripettai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Parasi",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Lathi",
                "state" => "Gujarat"
            ],
            [
                "name" => "Lalganj",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Narkhed",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Mathabhanga",
                "state" => "West Bengal"
            ],
            [
                "name" => "Shendurjana",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Peravurani",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Mariani",
                "state" => "Assam"
            ],
            [
                "name" => "Phulpur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Rania",
                "state" => "Haryana"
            ],
            [
                "name" => "Pali",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Pachore",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Parangipettai",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Pudupattinam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Panniyannur",
                "state" => "Kerala"
            ],
            [
                "name" => "Maharajganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Rau",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Monoharpur",
                "state" => "West Bengal"
            ],
            [
                "name" => "Mandawa",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Marigaon",
                "state" => "Assam"
            ],
            [
                "name" => "Pallikonda",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Pindwara",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Shishgarh",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Patur",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Mayang Imphal",
                "state" => "Manipur"
            ],
            [
                "name" => "Mhowgaon",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Guruvayoor",
                "state" => "Kerala"
            ],
            [
                "name" => "Mhaswad",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Sahawar",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sivagiri",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Mundargi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Punjaipugalur",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Kailasahar",
                "state" => "Tripura"
            ],
            [
                "name" => "Samthar",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Sakti",
                "state" => "Chhattisgarh"
            ],
            [
                "name" => "Sadalagi",
                "state" => "Karnataka"
            ],
            [
                "name" => "Silao",
                "state" => "Bihar"
            ],
            [
                "name" => "Mandalgarh",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Loha",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Pukhrayan",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Padmanabhapuram",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Belonia",
                "state" => "Tripura"
            ],
            [
                "name" => "Saiha",
                "state" => "Mizoram"
            ],
            [
                "name" => "Srirampore",
                "state" => "West Bengal"
            ],
            [
                "name" => "Talwara",
                "state" => "Punjab"
            ],
            [
                "name" => "Puthuppally",
                "state" => "Kerala"
            ],
            [
                "name" => "Khowai",
                "state" => "Tripura"
            ],
            [
                "name" => "Vijaypur",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Takhatgarh",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Thirupuvanam",
                "state" => "Tamil Nadu"
            ],
            [
                "name" => "Adra",
                "state" => "West Bengal"
            ],
            [
                "name" => "Piriyapatna",
                "state" => "Karnataka"
            ],
            [
                "name" => "Obra",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Adalaj",
                "state" => "Gujarat"
            ],
            [
                "name" => "Nandgaon",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Barh",
                "state" => "Bihar"
            ],
            [
                "name" => "Chhapra",
                "state" => "Gujarat"
            ],
            [
                "name" => "Panamattom",
                "state" => "Kerala"
            ],
            [
                "name" => "Niwai",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Bageshwar",
                "state" => "Uttarakhand"
            ],
            [
                "name" => "Tarbha",
                "state" => "Odisha"
            ],
            [
                "name" => "Adyar",
                "state" => "Karnataka"
            ],
            [
                "name" => "Narsinghgarh",
                "state" => "Madhya Pradesh"
            ],
            [
                "name" => "Warud",
                "state" => "Maharashtra"
            ],
            [
                "name" => "Asarganj",
                "state" => "Bihar"
            ],
            [
                "name" => "Sarsod",
                "state" => "Haryana"
            ],
            [
                "name" => "Gandhinagar",
                "state" => "Gujarat"
            ],
            [
                "name" => "Kullu",
                "state" => "Himachal Pradesh"
            ],
            [
                "name" => "Manali",
                "state" => "Himachal Praddesh"
            ],
            [
                "name" => "Mirzapur",
                "state" => "Uttar Pradesh"
            ],
            [
                "name" => "Kota",
                "state" => "Rajasthan"
            ],
            [
                "name" => "Dispur",
                "state" => "Assam"
            ]
        ];



        foreach ($cities as $city) {
            City::create(['name' => $city['name'], 'image' => 'cities_images/delhi.png']);
        }
    }
}
