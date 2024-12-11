@extends('layouts.app')
@section('title','')
@section('main-content')

<div class="container1">
            <h1>Privacy Policy</h1>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
    
            <h2>1. Introduction</h2>
            <p>
                At Mepolis Inc., we respect your privacy and are committed to protecting your personal information.
                This Privacy Policy outlines how we collect, use, and disclose your personal information in accordance with
                the Personal Information Protection and Electronic Documents Act (PIPEDA) and other applicable Canadian privacy laws.
            </p>
    
            <h2>2. Information We Collect</h2>
            <p>We collect personal information to provide and improve our services. This may include:</p>
            <ul>
                <li>Personal identification information, such as your name, email address, phone number, and billing address.</li>
                <li>Order details, delivery addresses, and payment information (through third-party payment processors).</li>
                <li>Usage data, including browsing behavior, location data, and IP addresses.</li>
                <li>Information you provide through customer support interactions.</li>
            </ul>
    
            <h2>3. How We Use Your Information</h2>
            <p>We use your information for the following purposes:</p>
            <ul>
                <li>To provide, maintain, and improve our services and website.</li>
                <li>To personalize your experience and recommend products or services based on your preferences.</li>
                <li>To process transactions securely and manage payments.</li>
                <li>To communicate with you about orders, updates, promotions, and other information that may be of interest.</li>
                <li>To comply with legal obligations, including tax and regulatory requirements.</li>
            </ul>
    
            <h2>4. Information Sharing and Disclosure</h2>
            <p>
                We do not sell, trade, or lease your personal information to third parties. However, we may share information with trusted third-party service
                providers to facilitate our business operations, such as payment processors and shipping partners. These third parties are bound by confidentiality agreements
                and are only permitted to use your information for the purpose of providing services on our behalf.
            </p>
    
            <h2>5. Data Retention</h2>
            <p>
                We retain your personal information only for as long as necessary to fulfill the purposes outlined in this Privacy Policy,
                unless a longer retention period is required or permitted by law.
            </p>
    
            <h2>6. Security of Your Information</h2>
            <p>
                We implement a variety of security measures to protect your personal information, including encryption and secure servers.
                However, no method of transmission over the Internet or method of electronic storage is 100% secure, and we cannot guarantee absolute security.
            </p>
    
            <h2>7. Access and Correction</h2>
            <p>
                Under PIPEDA, you have the right to access your personal information held by Mepolis Inc. If you believe the information we hold about you is inaccurate,
                you may request that we correct it. To make such a request, please contact our Privacy Officer using the contact details below.
            </p>
    
            <h2>8. Your Consent</h2>
            <p>
                By using our services, you consent to the collection, use, and disclosure of your personal information as described in this Privacy Policy.
                You may withdraw your consent at any time by contacting us, although doing so may affect your ability to use certain features of our services.
            </p>
    
            <h2>9. Children's Privacy</h2>
            <p>
                Our services are not intended for children under the age of 13. We do not knowingly collect personal information from children.
                If we become aware that we have inadvertently collected personal information from a child under 13, we will take steps to delete such information as quickly as possible.
            </p>
    
            <h2>10. Changes to This Privacy Policy</h2>
            <p>
                We may update this Privacy Policy from time to time. When we do, we will post the revised policy on this page with an updated effective date.
                We encourage you to review this policy periodically to stay informed about how we are protecting your personal information.
            </p>
    
            <div class="contact-info">
                <h2>Contact Us</h2>
                <p><strong>Privacy Officer</strong></p>
                <p>Mepolis Inc.</p>
                <p>Email: <a href="mailto:support@MepolisInc.com">support@MepolisInc.com</a></p>
                <p>Phone: [Your company’s contact number]</p>
                <p>Address: [Your company’s physical address]</p>
            </div>
        </div>

@endsection

{{-- Specify footer type --}}
@section('footer-type', 'footer2')
{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/terms.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('assets/js/terms.js') }}"></script>
@endsection
{{-- asset link end --}}