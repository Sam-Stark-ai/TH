<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TetherHeart</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .email-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            max-width: 640px;
            margin: 0 auto;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            position: relative;
        }
        
        .header {
            background: linear-gradient(135deg, #e91e63, #c2185b);
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .logo {
            font-size: 32px;
            font-weight: 700;
            color: white;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        
        .welcome-title {
            color: white;
            font-size: 28px;
            font-weight: 600;
            margin: 0;
            position: relative;
            z-index: 1;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        
        .content {
            padding: 40px 30px;
        }
        
        .greeting {
            font-size: 18px;
            color: #333;
            margin-bottom: 25px;
            font-weight: 500;
        }
        
        .intro-text {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
            line-height: 1.7;
        }
        
        .credentials-box {
            background: linear-gradient(135deg, #f8f9ff, #f0f4ff);
            border: 2px solid #e91e63;
            border-radius: 16px;
            padding: 30px;
            margin: 30px 0;
            position: relative;
            box-shadow: 0 8px 20px rgba(233, 30, 99, 0.1);
        }
        
        .credentials-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #e91e63, #c2185b, #e91e63);
            border-radius: 16px 16px 0 0;
        }
        
        .credentials-title {
            font-weight: 600;
            color: #e91e63;
            margin-bottom: 25px;
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .credential-item {
            margin-bottom: 20px;
        }
        
        .credential-label {
            font-weight: 600;
            color: #333;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: block;
        }
        
        .credential-value {
            color: #1a1a1a;
            font-family: 'SF Mono', Monaco, 'Cascadia Code', monospace;
            background: white;
            padding: 12px 16px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            font-size: 16px;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            transition: all 0.2s ease;
        }
        
        .credential-value:hover {
            border-color: #e91e63;
            box-shadow: 0 4px 12px rgba(233, 30, 99, 0.15);
        }
        
        .security-note {
            background: linear-gradient(135deg, #fff8e1, #ffecb3);
            border-left: 4px solid #ff9800;
            border-radius: 8px;
            padding: 20px;
            margin: 30px 0;
            color: #e65100;
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(255, 152, 0, 0.1);
        }
        
        .security-note strong {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 8px;
            font-size: 16px;
        }
        
        .features-list {
            background: #f8fffe;
            border-radius: 12px;
            padding: 25px;
            margin: 25px 0;
            border: 1px solid #e0f2f1;
        }
        
        .features-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .features-list li {
            padding: 8px 0;
            color: #333;
            position: relative;
            padding-left: 30px;
            font-weight: 500;
        }
        
        .features-list li::before {
            content: '💖';
            position: absolute;
            left: 0;
            top: 8px;
        }
        
        .login-button-container {
            text-align: center;
            margin: 40px 0;
        }
        
        .login-button {
            display: inline-block;
            background: linear-gradient(135deg, #e91e63, #c2185b);
            color: white;
            padding: 16px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 8px 20px rgba(233, 30, 99, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(233, 30, 99, 0.4);
        }
        
        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .login-button:hover::before {
            left: 100%;
        }
        
        .footer {
            background: #f8f9fa;
            text-align: center;
            padding: 30px;
            border-top: 1px solid #eee;
        }
        
        .footer-team {
            color: #333;
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 16px;
        }
        
        .footer-disclaimer {
            color: #666;
            font-size: 12px;
            line-height: 1.5;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #e0e0e0, transparent);
            margin: 25px 0;
        }
        
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            
            .content {
                padding: 30px 20px;
            }
            
            .credentials-box {
                padding: 20px;
            }
            
            .header {
                padding: 30px 20px;
            }
            
            .logo {
                font-size: 28px;
            }
            
            .welcome-title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">💖 TetherHeart</div>
            <h1 class="welcome-title">Welcome to TetherHeart!</h1>
        </div>

        <div class="content">
            <div class="greeting">Dear {{ $name }},</div>
            
            <p class="intro-text">Welcome to TetherHeart! We're excited to have you join our community of connected hearts. Your account has been successfully created, and we've prepared your login credentials below.</p>

            <div class="credentials-box">
                <div class="credentials-title">🔐 Your Account Credentials</div>
                <div class="credential-item">
                    <span class="credential-label">Username</span>
                    <div class="credential-value">{{ $username }}</div>
                </div>
                <div class="credential-item">
                    <span class="credential-label">Email Address</span>
                    <div class="credential-value">{{ $email }}</div>
                </div>
                <div class="credential-item">
                    <span class="credential-label">Temporary Password</span>
                    <div class="credential-value">{{ $password }}</div>
                </div>
            </div>

            <div class="security-note">
                <strong>🔒 Security Notice</strong>
                For your security, please change this temporary password after your first login. You can update it in your account settings dashboard.
            </div>

            <div class="divider"></div>

            <p>You can now access your account and start exploring all the amazing features TetherHeart has to offer:</p>
            
            <div class="features-list">
                <ul>
                    <li>Connect with your loved ones in meaningful ways</li>
                    <li>Share emotions and wellbeing updates</li>
                    <li>Access exclusive premium features</li>
                    <li>Track and manage your ring orders</li>
                </ul>
            </div>

            <div class="login-button-container">
                <a href="https://tetherheart.com/" style="color: white !important;" class="login-button">Access Your Account</a>
            </div>

            <div class="divider"></div>

            <p>If you have any questions or need assistance, our support team is here to help. Don't hesitate to reach out!</p>

            <p style="color: #555; margin-top: 30px;">Thank you for choosing TetherHeart – where hearts stay connected.</p>
        </div>

        <div class="footer">
            <div class="footer-team">With love,<br>The TetherHeart Team</div>
            <div class="footer-disclaimer">
                This email was sent because you created an account with TetherHeart. If you didn't make this request, please contact our support team immediately for assistance.
            </div>
        </div>
    </div>
</body>
</html>