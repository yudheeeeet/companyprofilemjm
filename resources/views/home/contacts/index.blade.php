{{-- todo Contacts --}}
<div class="contact" id="contacts">
    <div class="container">
        <div class="contact-box">
            <div class="box">
                <i class="fa-solid fa-star"></i>
                <h1>Contact Kami</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia molestias asperiores, voluptatibus sunt doloribus corrupti.</p>
            </div>
            <div class="form-contact">
                <form action="https://formspree.io/f/xknllvvn" method="POST">
                    <table>
                        <tr>
                            <td>
                                <input type="text" name="First Name" placeholder="First Name" required autocomplete="off"/>
                            </td>
                            <td>
                                <input type="text" name="Last Name" placeholder="Last Name" autocomplete="off"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="email" name="email" placeholder="Your Email" required autocomplete="off" style="width: 100%"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea name="Pesan" id="" cols="30" rows="10" placeholder="Pesan..." required style="width: 100%;"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" onclick="return confirm('Apakah data yang anda masukkan sudah benar?')">Kirim</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- todo Contacts --}}

<div class="maps container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="col-lg-4">
                <div class="maps" id="map"></div>
            </div>
            <div class="col-lg-4">
                <h2>Alamat PT  Megah Jaya Mandiri </h2>
            </div>
        </div>
    </div>
</div>
<script>
    var map = L.map('map').setView([-6.26, 106.74], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([-6.260107250934958, 106.74033535041]).addTo(map);
    var circle = L.circle([-6.260107250934958, 106.74033535041], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
    }).addTo(map);

    marker.bindPopup("Jl. Ceger Raya No. 54e").openPopup();
    circle.bindPopup("<b>PT Megah Jaya Mandiri</b><br>ada di sini.");

    var popup = L.popup()
    .setLatLng([-6.260035929671671, 106.74031389273853])
    .setContent("PT Megah Jaya Mandiri")
    .openOn(map);

    var popup = L.popup();
    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
    }
    map.on('click', onMapClick);
</script>