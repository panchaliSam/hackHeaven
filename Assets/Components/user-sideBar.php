<div id="sidebar-section" style="height: 100%; width: 250px; position: fixed; top: 0; left: 0; background-color: #111; overflow-x: hidden; transition: 0.5s; padding-top: 60px; margin-top: 60px; margin-bottom:100px;">
    <button onclick="closeSideBar()">Close &times;</button>
    <a href="#home" style="padding: 10px 15px; text-decoration: none; font-size: 18px; color: #818181; display: block; transition: 0.3s;">Home</a>
    <a href="#dashboard" style="padding: 10px 15px; text-decoration: none; font-size: 18px; color: #818181; display: block; transition: 0.3s;">Dashboard</a>
    <a href="#products" style="padding: 10px 15px; text-decoration: none; font-size: 18px; color: #818181; display: block; transition: 0.3s;">Products</a>
    <a href="#customers" style="padding: 10px 15px; text-decoration: none; font-size: 18px; color: #818181; display: block; transition: 0.3s;">Customers</a>
    <div class="profile" style="position: absolute; bottom: 20px; left: 15px; color: #818181;">mdo</div>
</div>
<script src="../../Assets/js/user-sidebar.js"></script>

<script>
    function closeSideBar() {
        document.getElementById("sidebar-section").style.display = "none";
    }
</script>