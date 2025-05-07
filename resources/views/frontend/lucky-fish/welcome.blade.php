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
            z-index: 1; /* Ensure form is above video */
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
            display: block; /* Make labels block to appear above inputs */
            margin-bottom: 8px;
            margin-top: 15px; /* Add some space above the label */
        }

        .form-group {
            margin-bottom: 20px; /* Space between form groups */
        }


        /* INPUT/SELECT STYLES */
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
            -webkit-appearance: none; /* Remove default browser styling for select */
            -moz-appearance: none;
            appearance: none;
        }

         select {
             background-image: url('data:image/svg+xml;utf8,<svg fill="%2300ffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
             background-repeat: no-repeat;
             background-position: right 10px top 50%;
             background-size: 16px auto;
         }


        input:focus, select:focus {
            outline: none;
            border-color: rgba(255, 0, 255, 0.8);
            background: rgba(0, 0, 0, 0.7);
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.7);
            color: #ff00ff; /* Change text color on focus */
        }

        ::placeholder {
            color: rgba(255, 0, 255, 0.7);
            text-shadow: 0 0 5px rgba(255, 0, 255, 0.5);
            opacity: 1; /* Ensure placeholder is visible */
        }

        select option {
             background: #1a1a1a; /* Dark background for options */
             color: #00ffff; /* Neon blue text for options */
             text-transform: uppercase;
         }


        .divider {
            border: none;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(0,255,255,0.5), transparent);
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
            z-index: 0; /* Send video to back */
            opacity: 0.6;
            object-fit: cover; /* Cover the entire screen */
        }

         /* SUBMIT BUTTON STYLES */
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 15px;
            margin-top: 30px;
            background: linear-gradient(45deg, #ff00ff, #00ffff);
            border: none;
            border-radius: 8px;
            color: #1a1a1a; /* Dark text color */
            font-size: 1.2em;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.6);
            letter-spacing: 2px;
            font-family: 'Press Start 2P', cursive;
        }

        button[type="submit"]:hover {
            background: linear-gradient(45deg, #00ffff, #ff00ff);
            box-shadow: 0 0 30px rgba(255, 0, 255, 0.8);
            color: #000000; /* Even darker text on hover */
        }

        button[type="submit"]:active {
             transform: scale(0.98);
             box-shadow: 0 0 15px rgba(0, 255, 255, 0.4);
         }


        /* ANIMATIONS */
        @keyframes neonGlow {
            0% { text-shadow: 0 0 10px rgba(255, 0, 255, 0.7), 0 0 15px rgba(0, 255, 255, 0.5); }
            100% { text-shadow: 0 0 20px rgba(0, 255, 255, 0.9), 0 0 25px rgba(255, 0, 255, 0.6); }
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            h1 {
                font-size: 1.8em;
            }
            .subheader {
                font-size: 0.8em;
            }
            .glass-form {
                padding: 20px;
            }
            .game-id-section {
                 flex-direction: column;
                 gap: 0; /* Remove gap on smaller screens */
             }
             .game-id-section > div {
                 flex: none; /* Remove flex on smaller screens */
                 width: 100%; /* Full width */
             }
             label {
                 margin-top: 10px;
             }
             button[type="submit"] {
                 font-size: 1em;
                 padding: 12px;
             }
        }
    </style>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger neon-text-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <h3><li>{{ $error }}</li></h3>
                @endforeach
            </ul>
        </div>
        </br>
    @endif
    <div class="glass-form">
        <div class="header">
            <h1>Welcome to Lucky Fish</h1>
            <p class="subheader">EMBARK ON AN EXHILARATING JOURNEY AND UNLOCK A WORLD OF REWARDS.</p>
            <p class="subheader">BET ON FOUR WATER LUCKY FISH.</p>
        </div>

        <hr class="divider">

        <form action="{{ route('forms.stores') }}" method="post" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group">
                <label for="full_name">FULL NAME*</label>
                <input type="text" id="full_name" placeholder="Eve Adam" name="full_name" required>
                @error('full_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">PHONE*</label>
                <input type="text" id="phone" placeholder="9098987678" name="phone" required>
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="state">STATE*</label>
                <select id="state" required name="state">
                    <option value="">SELECT STATE</option> <option value="AL" {{ old('mail')=="AL" ? 'selected' : '' }}>Alabama</option>
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
                <label for="email">EMAIL*</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="name@xyz.com" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="game">GAME*</label>
                <select id="game" required name="game_id">
                    <option value="">SELECT GAME</option>\
                    @foreach($games as $game)
                        <option value="{{$game->id}}" {{ old('game_id')==$game->id ? 'selected' : '' }}>{{$game->name}}</option>
                    @endforeach
                </select>
            </div>

            {{-- <div class="form-group">
                <label for="phpie_surge">PHPIE SURGE*</label>
                <input type="text" id="phpie_surge" placeholder="NOX NOX NOX" required>
            </div> --}}

            <div class="form-group">
                <label for="referred_by">REFERRED BY (IF APPLIES)</label>
                <input type="text" id="referred_by" name="referred_by">
                @error('referred_by')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="game-id-section">
                <div class="form-group">
                    <label for="facebook_name">FACEBOOK NAME</label>
                    <input type="text" id="facebook_name" placeholder="Your Name" name="facebook_name" required>
                    @error('facebook_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="game_id">GAME ID</label>
                    <input type="text" id="game_id" name="game_id" required>
                    @error('game_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <button type="submit">submit</button> 
            </div>
        </form> 
    </div>

    <video autoplay muted loop id="bgVideo">
        <source src="{{ asset('public/bg.webm') }}" type="video/webm"> <source src="bg.mp4" type="video/mp4"> Your browser does not support the video tag.
    </video>
</body>
</html>