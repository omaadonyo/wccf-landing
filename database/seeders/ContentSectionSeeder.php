<?php

namespace Database\Seeders;

use App\Models\ContentSection;
use Illuminate\Database\Seeder;

class ContentSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            // ===== HOME PAGE =====
            ['home', 'hero_badge', 'WCCF Mega Church Fundraising Campaign'],
            ['home', 'hero_title', 'Help Us Build a Mega Church<br>for the Glory of God'],
            ['home', 'hero_subtitle', 'For over 35 years, WCCF has united 70+ churches across West Nile. Now we are building a 5,000-seat sanctuary and community center — and we need your help. Every donation brings us closer to breaking ground on this historic faith project.'],
            ['home', 'hero_btn1_text', 'Donate Now'],
            ['home', 'hero_btn1_link', '/donate'],
            ['home', 'hero_btn2_text', 'Learn About the Project'],
            ['home', 'hero_btn2_link', '/about'],
            ['home', 'hero_bg_images', 'image-01.jpg,image-02.jpg,image-21.jpg', 'text'],

            ['home', 'about_preview_badge', 'The Vision'],
            ['home', 'about_preview_title', 'Why We Are Building a Mega Church'],
            ['home', 'about_preview_image', 'image-19.jpg', 'image'],
            ['home', 'about_preview_text1', 'For over 35 years, WCCF has united 70+ member churches across West Nile — but we have never had a permanent home. Our vision is to build a 5,000-seat mega church that will serve as a central house of worship, a conference hub, a leadership training center, and a community resource for generations to come.'],
            ['home', 'about_preview_text2', 'This is a generational faith project. We are raising UGX 5 Billion to purchase land, construct the sanctuary, and develop the surrounding community facilities. Your partnership in prayer and giving will make this dream a reality.'],
            ['home', 'about_preview_btn1_text', 'Give to the Building Fund'],
            ['home', 'about_preview_btn1_link', '/donate'],
            ['home', 'about_preview_btn2_text', 'Read Our Story'],

            ['home', 'card1_title', 'A Place for United Worship'],
            ['home', 'card1_text', 'A 5,000-seat sanctuary where all 70+ member churches can gather for united worship, conferences, and special events under one roof.'],
            ['home', 'card2_title', 'Community Center & Outreach Hub'],
            ['home', 'card2_text', 'Facilities for youth programs, medical outreach, counseling, and community development — serving the most vulnerable in West Nile.'],
            ['home', 'card3_title', 'Leadership Training Center'],
            ['home', 'card3_text', 'Classrooms and conference spaces for equipping church leaders, training ministers, and hosting Bible study conferences.'],
            ['home', 'card4_title', 'Prayer & Media Center'],
            ['home', 'card4_text', 'A dedicated prayer tower and media production studio for broadcasting the Gospel across Uganda and beyond.'],

            ['home', 'where_serve_badge', 'The Vision'],
            ['home', 'where_serve_title', 'A Mega Church for the West Nile Region'],
            ['home', 'where_serve_text', 'For over 35 years, WCCF has been uniting believers. Now we are building a permanent home for worship, fellowship, and community impact.'],
            ['home', 'where_serve_image', 'image-18.jpg', 'image'],
            ['home', 'where_serve_rendering_badge', 'Artistic Rendering'],
            ['home', 'where_serve_highlights_title', 'Project Highlights'],
            ['home', 'highlight1_title', '5,000-Seat Sanctuary'],
            ['home', 'highlight1_text', 'A spacious main auditorium for united worship, conferences, and special events.'],
            ['home', 'highlight2_title', 'Community Center'],
            ['home', 'highlight2_text', 'Facilities for youth programs, counseling, medical outreach, and community development.'],
            ['home', 'highlight3_title', 'Leadership Training Hub'],
            ['home', 'highlight3_text', 'Classrooms and conference spaces for equipping church leaders and ministers.'],
            ['home', 'highlight4_title', 'Prayer & Media Center'],
            ['home', 'highlight4_text', 'A dedicated prayer tower and media production studio for broadcasting the Gospel.'],
            ['home', 'counter_churches', '70', 'text'],
            ['home', 'counter_churches_label', 'Member Churches'],
            ['home', 'counter_capacity', '5000', 'text'],
            ['home', 'counter_capacity_label', 'Seat Capacity'],
            ['home', 'counter_budget', '5', 'text'],
            ['home', 'counter_budget_label', 'Project Budget (UGX)'],
            ['home', 'counter_cta_text', 'Support the Mega Church Project'],

            // ===== STORY SECTION (Home) =====
            ['home', 'journey_badge', 'Our Journey'],
            ['home', 'journey_title', 'Our Journey of Faith'],
            ['home', 'journey_cta_text', 'Read Full History'],
            ['home', 'journey_bg_image', 'image-16.jpg', 'image'],

            ['home', 'milestone1_year', '1990'],
            ['home', 'milestone1_title', 'Founding as LCCF'],
            ['home', 'milestone1_text', 'The fellowship began as Lugbara Christian Community Fellowship, gathering believers from the West Nile region.'],
            ['home', 'milestone2_year', '2011'],
            ['home', 'milestone2_title', 'Constitution Written'],
            ['home', 'milestone2_text', 'A formal constitution was drafted to guide the fellowship\'s governance, mission, and activities.'],
            ['home', 'milestone3_year', '2019'],
            ['home', 'milestone3_title', 'Constitution Amended'],
            ['home', 'milestone3_text', 'The constitution was amended to reflect the growing scope and expanding vision of the fellowship.'],
            ['home', 'milestone4_year', '2021'],
            ['home', 'milestone4_title', 'Registered as WCCF'],
            ['home', 'milestone4_text', 'The fellowship was officially registered as West Nile Christian Community Fellowship Limited, broadening its reach.'],
            ['home', 'milestone5_year', 'Present'],
            ['home', 'milestone5_title', '70+ Member Churches'],
            ['home', 'milestone5_text', 'Today WCCF unites over 70 churches across multiple regions, continuing to grow in faith and impact.'],
            ['home', 'milestone6_year', '2026'],
            ['home', 'milestone6_title', 'Mega Church Project Launch'],
            ['home', 'milestone6_text', 'WCCF launches the historic mega church building project — a 5,000-seat sanctuary and community center for the glory of God.'],

            // ===== VALUES SECTION =====
            ['home', 'values_badge', 'Why WCCF Matters'],
            ['home', 'values_title', 'Our Core Values'],
            ['home', 'value1_title', 'Christian Fellowship'],
            ['home', 'value1_text', 'United in Christ, we foster deep connections among believers across denominations, building a community of love, support, and mutual encouragement that reflects the body of Christ.'],
            ['home', 'value2_title', 'Spiritual Growth'],
            ['home', 'value2_text', 'Committed to making mature disciples of Christ through sound biblical teaching, prayer, discipleship programs, and conferences that equip believers for every good work.'],
            ['home', 'value3_title', 'Community Transformation'],
            ['home', 'value3_text', 'Being the hands and feet of Jesus, we engage in holistic community development, caring for the needy, and advocating for justice and reconciliation in society.'],

            // ===== SCRIPTURE SECTION =====
            ['home', 'scripture_verse', 'Hebrews 10:25 (NIV)'],
            ['home', 'scripture_text', '"Not giving up meeting together, as some are in the habit of doing, but encouraging one another—and all the more as you see the Day approaching."'],
            ['home', 'scripture_attribution', 'WCCF Leadership'],

            // ===== GET INVOLVED =====
            ['home', 'get_involved_badge', 'Support the Vision'],
            ['home', 'get_involved_title', 'Give to the Mega Church Building Fund'],
            ['home', 'get_involved_text', 'Your generosity will build a house of worship for thousands — a lasting legacy of faith in West Nile. Every gift, great or small, moves us forward.'],
            ['home', 'give_option1_title', 'Give a One-Time Gift'],
            ['home', 'give_option1_text', 'Your one-time donation goes directly toward the mega church construction. Every shilling counts in building a permanent house of worship for thousands of believers across West Nile.'],
            ['home', 'give_option2_title', 'Become a Monthly Partner'],
            ['home', 'give_option2_text', 'Join faithful monthly partners committed to seeing this mega church built. Your recurring support provides steady, predictable funding that keeps construction on schedule.'],
            ['home', 'give_option3_title', 'Register Your Church as a Partner'],
            ['home', 'give_option3_text', 'Join our fellowship of over 70 member churches united in this historic building project. Together we will leave a legacy of faith for the next generation.'],

            ['home', 'fund_progress_title', 'Building Fund Progress'],
            ['home', 'fund_progress_raised', 'UGX 500M Raised'],
            ['home', 'fund_progress_goal', 'Goal: UGX 5 Billion'],
            ['home', 'fund_progress_percent', '10'],
            ['home', 'fund_progress_text', '10% of our goal achieved. Help us reach 100%!'],

            // ===== ABOUT PAGE =====
            ['about', 'hero_badge', 'Our Story'],
            ['about', 'hero_title', 'The Story of WCCF'],
            ['about', 'hero_subtitle', 'For 35+ years, WCCF has united over 70 churches without a permanent home. A mega church will provide a central house of worship, host conferences, train leaders, and serve the community — all under one roof for generations to come.'],

            ['about', 'mission_badge', 'Our Purpose'],
            ['about', 'mission_subtitle', 'A Christian Community Promoting Renewed, Healed and Prayerful Christians'],
            ['about', 'mission_text', 'WCCF Limited is a faith-based umbrella organization that brings together churches and Christian communities across the West Nile region and beyond. Our vision is to create a vibrant and unified Christian community that actively participates in the spiritual, social, and economic transformation of the region.'],
            ['about', 'objective1_title', 'Unity & Fellowship'],
            ['about', 'objective1_text', 'To foster unity and fellowship among member churches through collaborative activities.'],
            ['about', 'objective2_title', 'Spiritual Growth'],
            ['about', 'objective2_text', 'To promote spiritual growth and maturity through teaching, conferences, and discipleship.'],
            ['about', 'objective3_title', 'Community Engagement'],
            ['about', 'objective3_text', 'To engage in community development and social outreach programs.'],
            ['about', 'objective4_title', 'Leadership Development'],
            ['about', 'objective4_text', 'To equip and empower church leaders for effective ministry.'],
            ['about', 'objective5_title', 'Capacity Building'],
            ['about', 'objective5_text', 'To provide training and resources for church leaders and members to enhance ministry effectiveness.'],
            ['about', 'objective6_title', 'Advocacy & Representation'],
            ['about', 'objective6_text', 'To represent member churches in matters of common interest with government and other organizations.'],

            ['about', 'leadership_title', 'Our Leadership'],
            ['about', 'leadership_text', 'Meet the dedicated leaders guiding WCCF in fulfilling its mission.'],
            ['about', 'leader1_name', 'Bishop John Doe'],
            ['about', 'leader1_position', 'Chairman'],
            ['about', 'leader1_bio', 'Providing spiritual oversight and strategic direction for the fellowship.'],
            ['about', 'leader1_image', 'image-19.jpg', 'image'],
            ['about', 'leader2_name', 'Rev. Jane Smith'],
            ['about', 'leader2_position', 'Vice Chairperson'],
            ['about', 'leader2_bio', 'Coordinating fellowship activities and supporting member churches.'],
            ['about', 'leader2_image', 'image-20.jpg', 'image'],
            ['about', 'leader3_name', 'Pastor Samuel O.'],
            ['about', 'leader3_position', 'General Secretary'],
            ['about', 'leader3_bio', 'Managing day-to-day operations and administrative functions.'],
            ['about', 'leader3_image', 'image-22.jpg', 'image'],

            ['about', 'constitution_title', 'Our Constitution'],
            ['about', 'constitution_text', 'Download the WCCF constitution to learn more about our governance structure, bylaws, and operational guidelines.'],
            ['about', 'constitution_bg', 'image-16.jpg', 'image'],
            ['about', 'constitution_btn_text', 'Download Constitution (PDF)'],

            // ===== MEMBERS PAGE =====
            ['members', 'hero_title', 'Our Member Churches'],
            ['members', 'hero_subtitle', 'WCCF brings together over 70 churches from across the West Nile region and beyond, united in faith and purpose.'],
            ['members', 'cta_text', 'Is your church interested in joining WCCF?'],
            ['members', 'cta_btn_text', 'Register Your Church'],

            // ===== EVENTS PAGE =====
            ['events', 'hero_title', 'Events & Gatherings'],
            ['events', 'hero_subtitle', 'Stay connected with upcoming conferences, worship nights, outreach programs, and fellowship gatherings organized by WCCF and its member churches.'],

            // ===== GALLERY PAGE =====
            ['gallery', 'hero_title', 'Photo Gallery'],
            ['gallery', 'hero_subtitle', 'A visual journey through WCCF conferences, worship events, community outreach, and the Mega Church project journey.'],

            // ===== RESOURCES PAGE =====
            ['resources', 'hero_title', 'Resources'],
            ['resources', 'hero_subtitle', 'Access sermons, documents, and teaching materials from WCCF and its member churches.'],

            // ===== DONATE PAGE =====
            ['donate', 'hero_title', 'Give to the Mega Church Building Fund'],
            ['donate', 'hero_subtitle', 'Your generosity will build a house of worship for thousands — a lasting legacy of faith in West Nile. All donations go directly toward the construction of the 5,000-seat mega church.'],
            ['donate', 'hero_bg', 'image-21.jpg', 'image'],

            ['donate', 'progress_title', 'Building Fund Progress'],
            ['donate', 'progress_raised', 'UGX 500M Raised'],
            ['donate', 'progress_goal', 'Goal: UGX 5 Billion'],
            ['donate', 'progress_percent', '10'],
            ['donate', 'progress_text', '10% of our goal achieved. Help us reach 100%!'],

            ['donate', 'option1_title', 'Give a One-Time Gift'],
            ['donate', 'option1_text', 'Your one-time donation goes directly toward the mega church construction. Every shilling counts in building a permanent house of worship for thousands of believers across West Nile.'],
            ['donate', 'option1_image', 'image-12.jpg', 'image'],
            ['donate', 'option2_title', 'Become a Monthly Partner'],
            ['donate', 'option2_text', 'Join faithful monthly partners committed to seeing this mega church built. Your recurring support provides steady, predictable funding that keeps construction on schedule.'],
            ['donate', 'option2_image', 'image-13.jpg', 'image'],
            ['donate', 'option3_title', 'Register Your Church as a Partner'],
            ['donate', 'option3_text', 'Join our fellowship of over 70 member churches united in this historic building project. Together we will leave a legacy of faith for the next generation.'],
            ['donate', 'option3_image', 'image-14.jpg', 'image'],

            ['donate', 'bank_title', 'Bank Transfer Details'],
            ['donate', 'bank_ugx_account', 'WCCF Mega Church Building Fund\nBank: Stanbic Bank Uganda\nAccount Name: West Nile Christian Community Fellowship Ltd\nAccount Number: 9030012345678\nBranch: Arua Branch'],
            ['donate', 'bank_usd_account', 'WCCF Mega Church Building Fund (USD)\nBank: Stanbic Bank Uganda\nAccount Name: West Nile Christian Community Fellowship Ltd\nAccount Number: 9030012345679\nSWIFT: SBICUGKX\nBranch: Arua Branch'],
            ['donate', 'bank_note', 'For bank transfers, please use "Mega Church Building Fund" as the payment reference. Send your deposit slip to finance@wccf.ug for confirmation.'],

            ['donate', 'scripture_verse', '2 Corinthians 9:7 (NIV)'],
            ['donate', 'scripture_text', '"Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."'],
            ['donate', 'scripture_btn1_text', 'Give Online via Mobile Money'],
            ['donate', 'scripture_btn2_text', 'Download Giving Form'],

            // ===== CONTACT PAGE =====
            ['contact', 'hero_title', 'Get in Touch'],
            ['contact', 'hero_subtitle', 'Have a question or want to learn more? Reach out to us — we would love to hear from you.'],
            ['contact', 'form_title', 'Send Us a Message'],
            ['contact', 'office_title', 'WCCF Headquarters'],
            ['contact', 'office_address', 'Arua City, West Nile Region\nUganda, East Africa'],
        ];

        foreach ($sections as $section) {
            $page = $section[0];
            $key = $section[1];
            $value = $section[2];
            $type = $section[3] ?? 'text';

            ContentSection::updateOrCreate(
                ['page' => $page, 'section_key' => $key],
                ['value' => $value, 'type' => $type]
            );
        }

        $this->command->info('Content sections seeded successfully!');
    }
}
