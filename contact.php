<?php
    include("header.php");
?>

    <div class="px-4 py-6 md:py-12 md:px-6">
        <h1 class="text-3xl text-center font-bold text-[#11274f] py-4">Contact Us</h1>
        <p class="text-center text-[#7E8C90] pb-4">
            We're here to help. Get in touch with us for any inquiries or support.
        </p>
    </div>
    <div class="px-4 py-12 md:px-6 space-y-3 bg-gray-200 grid md:grid-cols-2 gap-4">
        <div class="bg-white p-6 border-2 border-slate-300 space-y-3 rounded-md">
            <h3 class="text-2xl font-bold text-[#11274F]">Send us a message</h3>
            <form action="" method="post" class="flex flex-col justify-start items-start space-y-3 text-[#11274F]">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" class="p-2 border-2 w-full rounded-md">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" class="p-2 border-2 w-full rounded-md">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Subject of your message" class="p-2 border-2 w-full rounded-md">
                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="Your message" class="p-2 border-2 w-full rounded-md"></textarea>
                <button class="p-2 border-2 w-full rounded-md bg-[#618190] hover:bg-[#2f434d] text-white"><i class="fa-regular fa-paper-plane" style="color: #ffffff;"></i> &nbsp; Send Message</button>
            </form>
        </div>
        <div class="space-y-4">
            <div class="bg-white p-6 border-2 border-slate-300 space-y-4 rounded-md text-[#11274F]">
                <h3 class="text-2xl font-bold pb-2">Contact Information</h3>
                <p><i class="fa-solid fa-phone text-lg" style="color: #7e8c90;"></i> &nbsp; +91 9512275747</p>
                <p><i class="fa-solid fa-envelope text-lg" style="color: #7e8c90;"></i> &nbsp; valiyaparth1407@gmail.com</p>
                <p><i class="fa-solid fa-location-dot text-lg" style="color: #7e8c90;"></i> &nbsp; Sitanagar Society, Surat, Gujrat-395010.</p>
            </div>
            <div class="bg-white p-6 border-2 border-slate-300 space-y-3 rounded-md text-[#11274F]">
                <h3 class="text-2xl font-bold pb-2">Our location</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.722279802048!2d72.86551372486782!3d21.203188680490037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04fa768657609%3A0xab5d2ffd5592c0da!2sSitanagar%2C%20Punagam%2C%20Varachha%2C%20Surat%2C%20Gujarat%20395101!5e0!3m2!1sen!2sin!4v1731576479546!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-60 border-2"></iframe>
            </div>
        </div>
    </div>

<?php
    include("footer.php");
?>