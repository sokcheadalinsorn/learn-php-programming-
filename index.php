<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Programming Course Portal</title>
  <style>
    /* Consistent Color Scheme & Layout Baseline */
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
      max-width: 900px;
      width: 100%;
    }

    /* Hero Header Section */
    header {
      text-align: center;
      margin-bottom: 3rem;
      border-bottom: 1px solid #313244;
      padding-bottom: 2.5rem;
    }

    h1 {
      color: #cba6f7;
      font-size: 2.8rem;
      margin: 0 0 0.75rem 0;
      letter-spacing: -0.5px;
    }

    header p {
      color: #a6adc8;
      font-size: 1.2rem;
      margin: 0;
    }

    /* Core Overview Information Row */
    .intro-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
      margin-bottom: 3rem;
    }

    @media (max-width: 650px) {
      .intro-grid {
        grid-template-columns: 1fr;
      }
    }

    .info-panel {
      background-color: #181825;
      border: 1px solid #313244;
      border-radius: 12px;
      padding: 1.5rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .info-panel h3 {
      margin: 0 0 0.75rem 0;
      color: #89b4fa;
      font-size: 1.2rem;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .info-panel p,
    .info-panel ol {
      color: #a6adc8;
      font-size: 0.95rem;
      line-height: 1.6;
      margin: 0;
      padding-left: 1.1rem;
    }

    .info-panel p {
      padding-left: 0;
    }

    /* Course Timeline Syllabus Cards */
    .timeline-title {
      font-size: 1.3rem;
      color: #f5e0dc;
      margin-bottom: 1.5rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .week-card {
      background-color: #181825;
      border: 1px solid #313244;
      border-radius: 14px;
      padding: 2rem;
      margin-bottom: 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: transform 0.2s ease, border-color 0.2s ease;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .week-card:hover {
      transform: translateX(4px);
      border-color: #45475a;
    }

    .week-details {
      max-width: 70%;
    }

    .week-badge {
      background-color: rgba(203, 166, 247, 0.15);
      color: #cba6f7;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      display: inline-block;
      margin-bottom: 0.75rem;
    }

    .week-card h2 {
      margin: 0 0 0.5rem 0;
      font-size: 1.6rem;
      color: #f5e0dc;
    }

    .week-card p {
      color: #a6adc8;
      font-size: 0.95rem;
      line-height: 1.5;
      margin: 0;
    }

    /* Modular Action Button Navigation */
    .btn {
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 0.95rem;
      background-color: #cba6f7;
      color: #11111b;
      transition: background-color 0.2s ease, transform 0.1s ease;
      white-space: nowrap;
    }

    .btn:hover {
      background-color: #b4befe;
    }

    .btn:active {
      transform: scale(0.98);
    }

    @media (max-width: 550px) {
      .week-card {
        flex-direction: column;
        align-items: flex-start;
        gap: 1.5rem;
      }

      .week-details {
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
    <header>
      <h1>Web Development Training</h1>
      <p>Backend Engine Engineering Track — PHP Programming</p>
    </header>

    <div class="intro-grid">
      <div class="info-panel">
        <h3>🎯 Purpose & Objectives</h3>
        <p>This workspace is structured to move from active coding simulations to independent structural challenges. It establishes core competencies in application lifecycle handling, state validation, and system routing logic.</p>
      </div>

      <div class="info-panel">
        <h3>🛠️ Learning Execution</h3>
        <ol>
          <li>Select a targeted training module week below.</li>
          <li>Review baseline architecture via the <strong>Samples</strong>.</li>
          <li>Solve, test, and debug code within the <strong>Challenges</strong>.</li>
        </ol>
      </div>
    </div>

    <div class="timeline-title">Course Modules</div>

    <div class="week-card">
      <div class="week-details">
        <span class="week-badge">Module 01</span>
        <h2>Week 1: Foundations & Logic</h2>
        <p>Variables lifecycle tracking, system data typings (Strings, Integers, Floats, Booleans), algebraic evaluations, and compound logic verification layers.</p>
      </div>
      <a href="php-week1/" class="btn">Enter Module</a>
    </div>

    <div class="week-card">
      <div class="week-details">
        <span class="week-badge">Module 02</span>
        <h2>Week 2: Advanced Control Structures</h2>
        <p>Multi-dimensional data maps, collection loops, structural programmatic iteration, custom parameters processing, and state operations layout.</p>
      </div>
      <a href="php-week2/" class="btn">Enter Module</a>
    </div>

  </div>

</body>

</html>