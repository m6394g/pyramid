<%page args="x='helper/navigation-logged-in.mako'"/>


<%include file="helper/headtag.mako" />
<div id="main-wrapper">
	<div id="content-wrapper">
		<div id="main-container">
            <%include file = "helper/header.mako" />
            <%include file = "${x}" />
            <%include file = "components/plain-banner.mako" />
            <div class="padding-base">
            	<div class="padding-base-grad">
                	<div class="padding-base-container">
                        <a href="#" class="cta-link secondary">FAQs<span class="cta-arrow icons-help-circled"></span></a>
                    </div>
                </div>
            </div>
            <div class="general-form-container" id="registration-form-step-1">
            	<h2>1. Personal information</h2>
                <form id="agent_registration_form">
                    <table class="form-table">
                    <tr><th>First name</th></tr>
                    <tr>
                        <td>
                            <div class="hw-form-input">
                                <input type="text"/>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="form-input-help">
                                <span class="icons-help-circled"></span>
                            </a>
                        </td>
                    </tr>
                    <tr><th>Last name</th></tr>
                    <tr>
                        <td>
                            <div class="hw-form-input">
                                <input type="text"/>
                            </div>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr><th>Email</th></tr>
                    <tr>
                        <td>
                            <div class="hw-form-input">
                                <input type="email"/>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="form-input-help">
                                <span class="icons-help-circled"></span>
                            </a>
                        </td>
                    </tr>
                    <tr><th>Confirm email</th></tr>
                    <tr>
                        <td>
                            <div class="hw-form-input">
                                <input type="email"/>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="form-input-help">
                                <span class="icons-help-circled"></span>
                            </a>
                        </td>
                    </tr>
                    <tr><th>Contact number</th></tr>
                    <tr>
                        <td>
                            <div class="hw-form-input">
                                <input type="tel"/>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="form-input-help">
                                <span class="icons-help-circled"></span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="hw-form-info">
                                <span class="icons-info-circled"></span>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan ut purus quis ornare. Integer id ligula posuere, faucibus nibh quis, tempor nisl. Proin sit amet feugiat sem. Donec at nisl a urna pellentesque elementum. Mauris vitae nisl tellus.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="hw-form-input grey">
                                <label><input type="checkbox" name="terms_checkbox">I accept the <a href="#">terms &amp; conditions</a>.</label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="form-input-help">
                                <span class="icons-help-circled"></span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <button type="submit" class="cta-link primary">Register<span class="cta-arrow icons-right-open"></span></button>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
            <div class="general-form-container" id="registration-form-step-2">
            	<h2>2. Email confirmation</h2>
                <form id="email_confirmation_form">
                    <table class="form-table">
                    <tr><th>Email confirmation code</th></tr>
                    <tr>
                        <td>
                            <div class="hw-form-input">
                                <input type="text"/>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="form-input-help">
                                <span class="icons-help-circled"></span>
                            </a>
                        </td>
                    </tr>
                    <tr><th>Password</th></tr>
                    <tr>
                        <td>
                            <div class="hw-form-input">
                                <input type="password"/>
                            </div>
                        </td>
                    </tr>
                    <tr><th>Confirm Password</th></tr>
                    <tr>
                        <td>
                            <div class="hw-form-input">
                                <input type="password"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="hw-form-info">
                                <span class="icons-info-circled"></span>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan ut purus quis ornare. Integer id ligula posuere, faucibus nibh quis, tempor nisl. Proin sit amet feugiat sem. Donec at nisl a urna pellentesque elementum. Mauris vitae nisl tellus.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <button type="submit" class="cta-link primary">Reset password<span class="cta-arrow icons-right-open"></span></button>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
            <div class="general-form-large-container" id="registration-form-step-3">
                <h1>Congratulations!</h1>
                <h4>You are registered with Hallwala&trade;.</h4>
                <a href="#" class="cta-link primary large">Add a Hall<span class="cta-arrow icons-right-open"></span></a>
                <br/><br/>
                <a href="#" class="cta-link secondary">View your profile<span class="cta-arrow icons-right-open"></span></a>
            </div>
        </div>
	</div>
</div>
<%include file="helper/footer.mako" />
<%include file="helper/scripthelper.mako"/>
</body>
</html>
