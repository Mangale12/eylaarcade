<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plastic Transparency Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Press+Start+2P&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Orbitron', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(45deg, #000000, #1a1a1a);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .glass-form {
            background: rgba(0, 0, 0, 0.6); /* Dark semi-transparent */
            border-radius: 15px;
            padding: 30px;
            width: 100%;
            max-width: 800px;
            border: 2px solid rgba(0, 255, 255, 0.3);
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.5);
            position: relative;
            overflow: hidden;
        }

        /* NEON EFFECTS */
        h1, .subheader, label {
            text-transform: uppercase;
            text-align: center;
            background: linear-gradient(45deg, #ff00ff, #00ffff, #ff00ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: neonGlow 1.5s infinite alternate;
        }

        h1 {
            font-size: 2.5em;
            font-family: 'Press Start 2P', cursive;
            text-shadow: 0 0 20px rgba(0, 255, 255, 0.8);
        }

        .subheader {
            font-size: 1em;
            text-shadow: 0 0 12px rgba(255, 0, 255, 0.7);
        }

        label {
            font-weight: bold;
            letter-spacing: 1px;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.6);
        }

        /* INPUT STYLES */
        input, select {
            width: 100%;
            padding: 12px;
            background: rgba(0, 0, 0, 0.5);
            border: 2px solid rgba(0, 255, 255, 0.5);
            border-radius: 8px;
            color: #00ffff;
            font-size: 14px;
            text-transform: uppercase;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
        }

        input:focus, select:focus {
            outline: none;
            border-color: rgba(255, 0, 255, 0.8);
            background: rgba(0, 0, 0, 0.7);
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.7);
        }

        ::placeholder {
            color: #ff00ff;
            text-shadow: 0 0 5px rgba(255, 0, 255, 0.5);
        }

        .divider {
            border: none;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
            margin: 25px 0;
        }

        .game-id-section {
            display: flex;
            gap: 15px;
        }

        .game-id-section > div {
            flex: 1;
        }

        #bgVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            opacity: 0.6;
        }

        /* ANIMATIONS */
        @keyframes neonGlow {
            0% { text-shadow: 0 0 10px rgba(255, 0, 255, 0.7); }
            100% { text-shadow: 0 0 20px rgba(0, 255, 255, 0.9); }
        }
    </style>
</head>
<body>
    <div class="glass-form">
        <div class="header">
            <h1>Welcome to Lucky Fish</h1>
            <p class="subheader">EMBARK ON AN EXHILARATING JOURNEY AND UNLOCK A WORLD OF REWARDS.</p>
            <p class="subheader">BET ON FOUR WATER LUCKY FISH.</p>
        </div>

        <hr class="divider">

        <div class="form-group">
            <label>FULL NAME*</label>
            <input type="text" placeholder="Eve Adam" required>
        </div>

        <div class="form-group">
            <label>STATE*</label>
            <select required name="mail">
                <option value="AL" {{ old('mail')=="AL" ? 'selected' : '' }}>Alabama</option>
                <!--<option value="AL">Alabama</option>-->
                <option value="AK" {{ old('mail')=="AK" ? 'selected' : '' }}>Alaska</option>
                <option value="AZ" {{ old('mail')=="AZ" ? 'selected' : '' }}>Arizona</option>
                <option value="AR" {{ old('mail')=="AR" ? 'selected' : '' }}>Arkansas</option>
                <option value="CA" {{ old('mail')=="CA" ? 'selected' : '' }}>California</option>
                <option value="CO" {{ old('mail')=="CO" ? 'selected' : '' }}>Colorado</option>
                <option value="CT" {{ old('mail')=="CT" ? 'selected' : '' }}>Connecticut</option>
                <option value="DE" {{ old('mail')=="DE" ? 'selected' : '' }}>Delaware</option>
                <option value="DC" {{ old('mail')=="DC" ? 'selected' : '' }}>District Of Columbia</option>
                <option value="FL" {{ old('mail')=="FL" ? 'selected' : '' }}>Florida</option>
                <option value="GA" {{ old('mail')=="GA" ? 'selected' : '' }}>Georgia</option>
                <option value="HI" {{ old('mail')=="HI" ? 'selected' : '' }}>Hawaii</option>
                <option value="ID" {{ old('mail')=="ID" ? 'selected' : '' }}>Idaho</option>
                <option value="IL" {{ old('mail')=="IL" ? 'selected' : '' }}>Illinois</option>
                <option value="IN" {{ old('mail')=="IN" ? 'selected' : '' }}>Indiana</option>
                <option value="IA" {{ old('mail')=="IA" ? 'selected' : '' }}>Iowa</option>
                <option value="KS" {{ old('mail')=="KS" ? 'selected' : '' }}>Kansas</option>
                <option value="KY" {{ old('mail')=="KY" ? 'selected' : '' }}>Kentucky</option>
                <option value="LA" {{ old('mail')=="LA" ? 'selected' : '' }}>Louisiana</option>
                <option value="ME" {{ old('mail')=="ME" ? 'selected' : '' }}>Maine</option>
                <option value="MD" {{ old('mail')=="MD" ? 'selected' : '' }}>Maryland</option>
                <option value="MA" {{ old('mail')=="MA" ? 'selected' : '' }}>Massachusetts</option>
                <option value="MI" {{ old('mail')=="MI" ? 'selected' : '' }}>Michigan</option>
                <option value="MN" {{ old('mail')=="MN" ? 'selected' : '' }}>Minnesota</option>
                <option value="MS" {{ old('mail')=="MS" ? 'selected' : '' }}>Mississippi</option>
                <option value="MO" {{ old('mail')=="MO" ? 'selected' : '' }}>Missouri</option>
                <option value="MT" {{ old('mail')=="MT" ? 'selected' : '' }}>Montana</option>
                <option value="NE" {{ old('mail')=="NE" ? 'selected' : '' }}>Nebraska</option>
                <option value="NV" {{ old('mail')=="NV" ? 'selected' : '' }}>Nevada</option>
                <option value="NH" {{ old('mail')=="NH" ? 'selected' : '' }}>New Hampshire</option>
                <option value="NJ" {{ old('mail')=="NJ" ? 'selected' : '' }}>New Jersey</option>
                <option value="NM" {{ old('mail')=="NM" ? 'selected' : '' }}>New Mexico</option>
                <option value="NY" {{ old('mail')=="NY" ? 'selected' : '' }}>New York</option>
                <option value="NC" {{ old('mail')=="NC" ? 'selected' : '' }}>North Carolina</option>
                <option value="ND" {{ old('mail')=="ND" ? 'selected' : '' }}>North Dakota</option>
                <option value="OH" {{ old('mail')=="OH" ? 'selected' : '' }}>Ohio</option>
                <option value="OK" {{ old('mail')=="OK" ? 'selected' : '' }}>Oklahoma</option>
                <option value="OR" {{ old('mail')=="OR" ? 'selected' : '' }}>Oregon</option>
                <option value="PA" {{ old('mail')=="PA" ? 'selected' : '' }}>Pennsylvania</option>
                <option value="RI" {{ old('mail')=="RI" ? 'selected' : '' }}>Rhode Island</option>
                <option value="SC" {{ old('mail')=="SC" ? 'selected' : '' }}>South Carolina</option>
                <option value="SD" {{ old('mail')=="SD" ? 'selected' : '' }}>South Dakota</option>
                <option value="TN" {{ old('mail')=="TN" ? 'selected' : '' }}>Tennessee</option>
                <option value="TX" {{ old('mail')=="TX" ? 'selected' : '' }}>Texas</option>
                <option value="UT" {{ old('mail')=="UT" ? 'selected' : '' }}>Utah</option>
                <option value="VT" {{ old('mail')=="VT" ? 'selected' : '' }}>Vermont</option>
                <option value="VA" {{ old('mail')=="VA" ? 'selected' : '' }}>Virginia</option>
                <option value="WA" {{ old('mail')=="WA" ? 'selected' : '' }}>Washington</option>
                <option value="WV" {{ old('mail')=="WV" ? 'selected' : '' }}>West Virginia</option>
                <option value="WI" {{ old('mail')=="WI" ? 'selected' : '' }}>Wisconsin</option>
                <option value="WY" {{ old('mail')=="WY" ? 'selected' : '' }}>Wyoming</option>
            </select>
        </div>

        <div class="form-group">
            <label>EMAIL*</label>
            <input type="email" placeholder="name@xyz.com" required>
        </div>

        <div class="form-group">
            <label>GAME*</label>
            <select required>
                <option value="">Select Game</option>
                <option>Game 1</option>
                <option>Game 2</option>
            </select>
        </div>

        <div class="form-group">
            <label>PHPIE SURGE*</label>
            <input type="text" placeholder="NOX NOX NOX" required>
        </div>

        <div class="form-group">
            <label>REFERRED BY (IF APPLIES)</label>
            <input type="text">
        </div>

        <div class="game-id-section">
            <div class="form-group">
                <label>FACELOVE NAME</label>
                <input type="text" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label>GAME ID</label>
                <input type="text">
            </div>
        </div>
    </div>

    <video autoplay muted loop id="bgVideo">
        <source src="{{ asset('public/bg.webm') }}" type="video/mp4">
    </video>
</body>
</html>
