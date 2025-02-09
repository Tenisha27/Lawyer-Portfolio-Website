document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Initialize 3D Gavel
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / 400, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer();
    renderer.setSize(window.innerWidth, 400);
    document.getElementById('3d-gavel').appendChild(renderer.domElement);

    const geometry = new THREE.CylinderGeometry(5, 5, 20, 32);
    const material = new THREE.MeshBasicMaterial({ color: 0x8B4513 });
    const gavel = new THREE.Mesh(geometry, material);
    scene.add(gavel);

    const geometryHandle = new THREE.CylinderGeometry(2, 2, 50, 32);
    const materialHandle = new THREE.MeshBasicMaterial({ color: 0x8B4513 });
    const handle = new THREE.Mesh(geometryHandle, materialHandle);
    handle.position.set(0, -35, 0);
    handle.rotation.z = Math.PI / 2;
    scene.add(handle);

    camera.position.z = 50;

    function animate() {
        requestAnimationFrame(animate);
        gavel.rotation.x += 0.01;
        gavel.rotation.y += 0.01;
        handle.rotation.x += 0.01;
        handle.rotation.y += 0.01;
        renderer.render(scene, camera);
    }

    animate();
});
