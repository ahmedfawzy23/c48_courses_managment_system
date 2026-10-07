<?php
require_once __DIR__ . '/../includes/header.php';
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="h4 fw-bold text-dark mb-1">Student Enrollments</h2>
        <p class="text-secondary small mb-0">Manage course subscriptions and registered students.</p>
    </div>
    <a href="<?= BASE_URL ?>/enrollments/create.php" class="btn btn-primary shadow-sm">
        <i class="bi bi-plus-lg me-1"></i> Enroll Student
    </a>
</div>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span class="fw-semibold text-dark">
            <i class="bi bi-card-checklist me-2 text-primary"></i> All Enrollments (5)
        </span>
    </div>
    <div class="table-responsive">
        <table class="table table-custom mb-0">
            <thead>
                <tr>
                    <th style="width: 70px;">ID</th>
                    <th>Student Name</th>
                    <th>Contact Info</th>
                    <th>Course Title</th>
                    <th>Course Price</th>
                    <th>Enrolled At</th>
                    <th class="text-end" style="width: 120px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                        <td colspan="7" class="text-center py-4 text-muted">
                            No enrollments recorded yet. Click "Enroll Student" to register a student in a course.
                        </td>
                    </tr> -->
                <tr>
                    <td class="text-secondary fw-semibold">#1</td>
                    <td>
                        <a href="students/show.php?id=5" class="fw-semibold text-dark text-decoration-none hover-primary">
                            Ahmed Mahmoud
                        </a>
                    </td>
                    <td>
                        <div><i class="bi bi-envelope text-muted me-1"></i> ahmedmohammed@gmailcom</div>
                        <small class="text-muted"><i class="bi bi-telephone text-muted me-1"></i> 01150673012</small>
                    </td>
                    <td>
                        <a href="courses/show.php?id=5" class="text-decoration-none">
                            <span class="badge bg-light text-dark border px-2 py-1">
                                PHP
                            </span>
                        </a>
                    </td>
                    <td>
                        <span class="badge bg-success-subtle text-success border border-success-subtle">
                            $100
                        </span>
                    </td>
                    <td class="text-secondary small">
                        2026-04-06 12:12:12
                    </td>
                    <td class="text-end">
                        <a href="enrollments/delete.php?id=1"
                            class="btn btn-outline-danger btn-sm-action"
                            onclick="return confirm('Remove Ahmed Mahmoud from PHP?');"
                            title="Remove Enrollment">
                            <i class="bi bi-trash"></i> Drop
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>