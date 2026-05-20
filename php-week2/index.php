<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 2: Advanced Control Structures & Arrays Dashboard</title>
  <style>
    /* Maintained dark-theme baseline across the platform workspace */
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

    /* Back tracing link component */
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

    /* Header Layout and boundary */
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

    /* Title block styles */
    .section-title {
      font-size: 1.2rem;
      color: #f5e0dc;
      margin-bottom: 1.5rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    /* Content Lab Row Cards */
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
      background-color: rgba(249, 226, 175, 0.15);
      color: #f9e2af;
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

    /* Button elements styling mapped to custom color palettes */
    .btn {
      text-decoration: none;
      padding: 12px 20px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 0.95rem;
      background-color: #f9e2af;
      color: #11111b;
      transition: background-color 0.2s ease;
      white-space: nowrap;
    }

    .btn:hover {
      background-color: #f5e0dc;
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
      <h1>Module 02: Control Structures & Collections</h1>
      <p class="module-desc">
        Welcome to Week 2. This module expands beyond isolated individual elements. Students will learn how to group data into index matrices or key-value pair maps, automate generation flows using loops, construct custom data processing functions, and format complex application states.
      </p>
    </header>

    <div class="section-title">Reference Code Material</div>

    <div class="card">
      <div class="card-details">
        <span class="tag">Reference 01</span>
        <h2>Sample 1: Array Layout Iterations</h2>
        <p>Demonstrates how to store dataset elements inside single collections, step through indexes linearly, and output repeated card configurations safely without writing repetitive code blocks.</p>
      </div>
      <a href="sample1/" class="btn">Launch Code</a>
    </div>

    <div class="card">
      <div class="card-details">
        <span class="tag">Reference 02</span>
        <h2>Sample 2: Multi-Dimensional Associative Records</h2>
        <p>Explores structural key-value storage designs, nested arrays architecture, and processing data parameters to drive complex data displays.</p>
      </div>
      <a href="sample2/" class="btn">Launch Code</a>
    </div>

  </div>

</body>

</html>