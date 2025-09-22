<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการคำขอร้องลา</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-brand">
                <i class="fas fa-calendar-check"></i>
                <span>ระบบจัดการคำขอร้องลา</span>
        </div>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="index.php" class="nav-link">
                    <i class="fas fa-home"></i>
                    <span>หน้าหลัก</span>
                </a>
            </li>
             <li class="nav-item">
                <a href="apply-leave.php" class="nav-link">
                    <i class="fas fa-plus-circle"></i>
                    <span>คำขอร้องลา</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="leave-history.php" class="nav-link">
                    <i class="fas fa-history"></i>
                    <span>ประวัติการอนุมัติ</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link">
                    <i class="fas fa-user-circle"></i>
                    <span>ข้อมูลพนักงาน</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="process-logout.php" class="nav-link logout-btn" onclick="return confirm('คุณต้องการออกจากระบบใช่หรือไม่?')">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>ออกจากระบบ</span>
                </a>
            </li>
            </ul>
        </div>
    </nav>

    <div class="welcome-container">
        <h1 class="welcome-text"> Dashboard ผู้บริหาร </h1>
    </div>

   <div class="dashboard-container">
    <div class="dashboard-box">
        <div class="box-top">
            <i class="fas fa-calendar-check"></i>
        </div>
        <p class="box-number">1</p>
        <p class="box-text">คำขอการลาที่รอการอนุมัติ</p>
    </div>

    <div class="dashboard-box">
        <div class="box-top">
            <i class="fas fa-check-circle"></i>
        </div>
        <p class="box-number">1</p>
        <p class="box-text">การอนุมัติล่าสุดในเดือนนี้</p>
    </div>

    <div class="dashboard-box">
        <div class="box-top">
            <i class="fas fa-users"></i>
        </div>
        <p class="box-number">4</p>
        <p class="box-text">พนักงานทั้งหมดในระบบ</p>
    </div>
</div>
    
</body>
</html>