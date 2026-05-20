<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 1: Core PHP Fundamentals Dashboard</title>
  <style>
    /* Maintain design consistency with root portal */
    body {
      margin: 0;
      padding: 3rem 1rem;
      background: linear-gradient(135deg, #1e1e2f 0%, #11111b 100%);
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
      color: #cdd6f4;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      box-sizing: border-box;
    }

    .container {
      max-width: 850px;
      width: 100%;
    }

    /* Go Back to Main Dashboard Navigation Link */
    .back-nav {
      margin-bottom: 1.5rem;
    }

    .back-nav a {
      color: #89b4fa;
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .back-nav a:hover {
      text-decoration: underline;
    }

    /* Header Setup */
    header {
      margin-bottom: 3rem;
      border-bottom: 1px solid #313244;
      padding-bottom: 2rem;
    }

    h1 {
      color: #cba6f7;
      font-size: 2.3rem;
      margin: 0 0 0.75rem 0;
    }

    .module-desc {
      color: #a6adc8;
      font-size: 1.1rem;
      line-height: 1.6;
      margin: 0;
    }

    /* Section Layout headings */
    .section-title {
      font-size: 1.2rem;
      color: #f5e0dc;
      margin-bottom: 1.5rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    /* Practice Cards Row Structure */
    .card {
      background-color: #181825;
      border: 1px solid #313244;
      border-radius: 12px;
      padding: 2rem;
      margin-bottom: 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: transform 0.2s ease, border-color 0.2s ease;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card:hover {
      transform: translateX(4px);
      border-color: #45475a;
    }

    .card-details {
      max-width: 70%;
    }

    .tag {
      background-color: rgba(166, 227, 161, 0.15);
      color: #a6e3a1;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      display: inline-block;
      margin-bottom: 0.75rem;
    }

    .card h2 {
      margin: 0 0 0.5rem 0;
      font-size: 1.5rem;
      color: #f5e0dc;
    }

    .card p {
      color: #a6adc8;
      font-size: 0.95rem;
      line-height: 1.5;
      margin: 0;
    }

    /* Action Link buttons */
    .btn {
      text-decoration: none;
      padding: 12px 20px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 0.95rem;
      background-color: #a6e3a1;
      color: #11111b;
      transition: background-color 0.2s ease;
      white-space: nowrap;
    }

    .btn:hover {
      background-color: #94e2d5;
    }

    @media (max-width: 550px) {
      .card {
        flex-direction: column;
        align-items: flex-start;
        gap: 1.5rem;
      }

      .card-details {
        max-width: 100%;
      }

      .btn {
        width: 100%;
        text-align: center;
        box-sizing: border-box;
      }
    }
  </style>
</head>

<body>

  <div class="container">

    <div class="back-nav">
      <a href="../">← Back to Course Portal</a>
    </div>

    <header>
      <h1>Module 01: Core PHP Fundamentals</h1>
      <p class="module-desc">
        Welcome to Week 1. This module is focused on understanding how data is declared, processed, and tracked in a system. Students explore the structural lifecycle of variables, see how data formatting changes code capability, and configure both basic calculations and evaluation conditions.
      </p>
    </header>

    <div class="section-title">Reference Code Material</div>

    <div class="card">
      <div class="card-details">
        <span class="tag">Reference 01</span>
        <h2>Sample 1: Variable Isolation & Concatenation</h2>
        <p>Demonstrates why decoupling tracking text strings into local standard variables avoids hardcoding blocks, alongside practical execution mechanics using the period character dot code operators.</p>
      </div>
      <a href="sample1/" class="btn">Launch Code</a>
    </div>

    <div class="card">
      <div class="card-details">
        <span class="tag">Reference 02</span>
        <h2>Sample 2: Data Typing Forms & Arithmetic</h2>
        <p>Explores how computers partition specific processing operations based on structured shapes (Strings, Integers, Floats, and Booleans) inside active execution logic conditions.</p>
      </div>
      <a href="sample2/" class="btn">Launch Code</a>
    </div>

  </div>

</body>

</html>