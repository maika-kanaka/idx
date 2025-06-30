
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0a2342 0%, #1e3c72 50%, #2a5298 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        
        .absensi-container {
            position: relative;
            z-index: 2;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .absensi-header {
            padding: 20px 0;
            text-align: center;
        }
        
        .absensi-title {
            color: #ffffff;
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0;
            letter-spacing: 2px;
            text-transform: lowercase;
        }
        
        .header-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            margin-top: 15px;
        }
        
        .header-logos img {
            height: 60px;
            width: auto;
            filter: brightness(1.1);
        }
        
        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }
        
        .absensi-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            max-width: 500px;
            width: 100%;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .card-title {
            font-size: 2rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }
        
        .card-date {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 30px;
            font-weight: 500;
        }
        
        .day-section {
            text-align: left;
            margin-bottom: 25px;
        }
        
        .day-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        
        .activity-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .activity-item:hover {
            background-color: rgba(52, 152, 219, 0.1);
            transform: translateX(5px);
        }
        
        .activity-checkbox {
            width: 24px;
            height: 24px;
            border: 2px solid #3498db;
            border-radius: 4px;
            margin-right: 15px;
            position: relative;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .activity-checkbox.checked {
            background-color: #3498db;
            border-color: #3498db;
        }
        
        .activity-checkbox.checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-weight: bold;
            font-size: 14px;
        }
        
        .activity-label {
            font-size: 1.1rem;
            color: #2c3e50;
            font-weight: 500;
            cursor: pointer;
        }
        
        .submit-section {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .submit-btn {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(52, 152, 219, 0.3);
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(52, 152, 219, 0.4);
        }
        
        @media (max-width: 768px) {
            .absensi-title {
                font-size: 2rem;
            }
            
            .header-logos {
                gap: 20px;
            }
            
            .header-logos img {
                height: 45px;
            }
            
            .absensi-card {
                padding: 30px 20px;
                margin: 20px;
            }
            
            .card-title {
                font-size: 1.5rem;
            }
            
            .card-date {
                font-size: 1rem;
            }
            
            body::after {
                height: 100px;
            }
        }
    </style>

    <div class="absensi-container">
        <?php include 'components/logo.php'; ?>
        
        <main class="main-content">
            <div class="absensi-card">
                <h2 class="card-title">ABSENSI</h2>
                <div class="card-date">JULY 12TH, 2025</div>
                
                <div class="day-section">
                    <h3 class="day-title">Day 1</h3>
                    
                    <div class="activity-item">
                        <div class="activity-checkbox"></div>
                        <span class="activity-label">Kedatangan</span>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-checkbox"></div>
                        <span class="activity-label">City Tour</span>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-checkbox"></div>
                        <span class="activity-label">Check in Hotel</span>
                    </div>
                </div>
                
                <div class="submit-section">
                    <button class="submit-btn" onclick="submitAbsensi()">Submit Absensi</button>
                </div>
            </div>
        </main>
    </div>
    
    <script>
        function toggleCheckbox(item) {
            const checkbox = item.querySelector('.activity-checkbox');
            checkbox.classList.toggle('checked');
        }
        
        function submitAbsensi() {
            const checkedItems = document.querySelectorAll('.activity-checkbox.checked');
            const activities = Array.from(checkedItems).map(checkbox => {
                return checkbox.parentElement.querySelector('.activity-label').textContent;
            });
            
            if (activities.length === 0) {
                alert('Silakan pilih minimal satu kegiatan untuk absensi.');
                return;
            }
            
            // Here you would typically send the data to a server
            alert(`Absensi berhasil disimpan untuk kegiatan: ${activities.join(', ')}`);
        }
        
        // Add some animation when page loads
        document.addEventListener('DOMContentLoaded', function() {
            const card = document.querySelector('.absensi-card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.8s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 300);
        });
    </script>
