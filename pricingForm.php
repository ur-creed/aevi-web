<!-- Pricing Form -->
<div class="container container-form">
    <div class="row row-content">
        <form id="PricingContactForm" style="display: none;" class="p-4">
            <div class="secondaryTitle title">
                Please fill out this form below.
            </div>
            <div class="mb-5">
                <label for="FullName" class="form-label">Full Name</label>
                <input id="FullName" type="text" name="full_name" class="form-control name formEntry" placeholder="Ragnar Lothbrok" required>
            </div>
            <div class="mb-5">
                <label for="ClientEmail" class="form-label">Email</label>
                <input id="ClientEmail" type="email" name="client_email" class="form-control email formEntry" aria-describedby="emailHelp" placeholder="Ragnar.Lothbrok@email.com" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else!</div>
            </div>
            <div class="mb-5">
                <label for="PackageSelect" class="form-label">Select a Package:</label>
                <select id="PackageSelect" class="form-select" name="package_select" required>
                    <option value="">Choose package</option>
                    <option value="new">Request a Quote</option>
                    <!--		                <option value="existing">Maintenance</option>-->
                </select>
            </div>
            <div class="mb-5">
                <label for="Message" class="form-label">A little about your project</label>
                <textarea id="Message" name="message" class="form-control message formEntry" placeholder="Tell us a little bit about your project and vision..." required></textarea>
            </div>
            <div class="d-grid gap-1 col-6 mx-auto mt-4 mb-3">
                <button type="submit" class="btn btn-success" aria-label="Pricing Submit Button">Submit</button>
            </div>
            <!--		        <div class="spinner-grow text-success" role="status">-->
            <!--			        <span class="sr-only">Loading...</span>-->
            <!--		        </div>-->
        </form>
    </div>
</div>